<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UsersRequest;
use App\Http\Resources\UsersResponse;
use App\Http\Resources\UsersResponseCollection;
use App\Http\Requests\UsersValidationAdd;
use App\Http\Requests\UsersValidationUpdate;
use App\Helpers\ApiResponse;
use App\Models\UsersModel;

class UsersController extends Controller
{
    protected $UsersModel;
     public function __construct(UsersModel $UsersModel) {
    $this->UsersModel = $UsersModel;
    }


      public function index(UsersRequest $request)  {
            $validated = $request->validated();

            $search = $validated['search'] ?? null;
            $perPage = is_numeric($validated['per_page'] ?? null) ? $validated['per_page'] : 10;
            $sortBy = $validated['sort_by'] ?? 'created_at';
            $sortDir = $validated['sort_dir'] ?? 'desc';
            $onlyDeleted = $validated['only_deleted'] ?? false;

            $query = $this->UsersModel
                ->onlyDeleted($onlyDeleted)
                ->search($search)
                ->sort($sortBy, $sortDir);
            $results = $query->paginate($perPage);
            $message = $results->isEmpty() ? "Data yang Anda cari tidak ditemukan" : "Success";
            return ApiResponse::paginate(new UsersResponseCollection($results), $message);
    }


    public function show(string $id)
        {
            $Users = $this->UsersModel->find($id);
            if (!$Users) {
                return ApiResponse::error('Users not found', [
                    'id' => ['Data dengan ID tersebut tidak tersedia']
                ], 404);
            }
            return ApiResponse::success(new UsersResponse($Users), 'Success ambil users detail', 200);
        }


    public function store(UsersValidationAdd $request) {
          $data = $request->validated();
    try {
        // Optional: cek duplikasi manual (jika memang ingin override validasi laravel)
        $errors = UsersModel::isDuplicate($data); 
         if (!empty($errors)) {
                 return ApiResponse::error('Validasi gagal', $errors, 400);
            }

        $Users = $this->UsersModel->create([
            'fullname'     => $data['fullname'],
            'username'     => $data['username'], 
            'phone_number'     => $data['phone_number'], 
            'email'     => $data['email'], 
            'role'     => $data['role'], 
            'password' => bcrypt($request->password), 
        ]);

        return ApiResponse::success(new UsersResponse($Users), 'Success Create New Users', 201);

    } catch (\Illuminate\Database\QueryException $e) {
        return ApiResponse::error('Gagal membuat category (query error)', [
            'exception' => config('app.debug') ? $e->getMessage() : null
        ], 422);
    } catch (\Exception $e) {
        return ApiResponse::error('Terjadi kesalahan saat membuat category', [
            'exception' => config('app.debug') ? $e->getMessage() : null
        ], 500);
    }
    }





public function update(UsersValidationUpdate $request, $id)
{
    $users = $this->UsersModel->find($id);

    if (!$users) {
        return ApiResponse::error('Users dengan ID tersebut tidak ditemukan.', [
            'id' => ['Data tidak tersedia.']
        ], 404);
    }

    try {
        // ambil hanya field valid + tidak null
        $data = array_filter($request->validated(), fn($v) => !is_null($v));

        // Validasi duplikat
        $errors = UsersModel::isDuplicate($data, $id);
        if (!empty($errors)) {
            return ApiResponse::error('Validasi gagal', $errors, 400);
        }

        if (isset($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        }

        $users->update($data);

        return ApiResponse::success(new UsersResponse($users), 'Success Update user', 200);

    } catch (\Illuminate\Database\QueryException $e) {
        return ApiResponse::error('Gagal update user (query error)', [
            'exception' => config('app.debug') ? $e->getMessage() : null
        ], 422);
    } catch (\Exception $e) {
        return ApiResponse::error('Failed to update user', [
            'exception' => config('app.debug') ? $e->getMessage() : 'Please try again later'
        ], 500);
    }
}


public function destroy(string $id)
{
    try {
        $users = $this->UsersModel->find($id);

       if (!$users) {
            return ApiResponse::error('Users dengan ID tersebut tidak ditemukan.', [
                'id' => ['Data tidak tersedia.']
            ], 404);
        }

        $users->delete();

        return ApiResponse::success(new UsersResponse($users), 'Success Delete users', 200);
    } catch (\Exception $e) {
        return ApiResponse::error('Failed to delete category', [
            'exception' => config('app.debug') ? $e->getMessage() : null
        ], 500);
    }
}
}
