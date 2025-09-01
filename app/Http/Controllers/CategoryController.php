<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Resources\CategoryResponse;
use App\Http\Requests\CategoryRequest;
use App\Http\Resources\CategoryResponseCollection;
use App\Helpers\ApiResponse;
use App\Http\Requests\CategoryRequestValidation;
use Illuminate\Support\Str;



class CategoryController extends Controller
{
     protected $Category;
     public function __construct(Category $Category) {
        $this->Category = $Category;
     }

   public function index(CategoryRequest $request)  {
            $validated = $request->validated();

            $search = $validated['search'] ?? null;
            $perPage = is_numeric($validated['per_page'] ?? null) ? $validated['per_page'] : 10;
            $sortBy = $validated['sort_by'] ?? 'created_at';
            $sortDir = $validated['sort_dir'] ?? 'desc';
            $onlyDeleted = $validated['only_deleted'] ?? false;

            $query = $this->Category
                ->onlyDeleted($onlyDeleted)
                ->search($search)
                ->sort($sortBy, $sortDir);
            $results = $query->paginate($perPage);
            $message = $results->isEmpty() ? "Data yang Anda cari tidak ditemukan" : "Success";
            return ApiResponse::paginate(new CategoryResponseCollection($results), $message);
    }



      public function show(string $id)
        {
            $Category = $this->Category->find($id);
            if (!$Category) {
                return ApiResponse::error('Category not found', [
                    'id' => ['Data dengan ID tersebut tidak tersedia']
                ], 404);
            }
            return ApiResponse::success(new CategoryResponse($Category), 'Success ambil category detail', 200);
        }



public function store(CategoryRequestValidation $request)
{
    $data = $request->validated();

    try {
        // Optional: cek duplikasi manual (jika memang ingin override validasi laravel)
        $errors = Category::isDuplicate($data); 
         if (!empty($errors)) {
                 return ApiResponse::error('Validasi gagal', $errors, 400);
            }

        $Category = $this->Category->create([
            'name'     => $data['name'],
            'slug'   => Str::slug($data['name']), 
            'description'    => $data['description'],
        ]);

        return ApiResponse::success(new CategoryResponse($Category), 'Success Create New Category', 201);

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



public function update(CategoryRequestValidation $request, $id)
{
    $data = $request->validated();

    $category = $this->Category->find($id);

    if (!$category) {
         return ApiResponse::error('Category dengan ID tersebut tidak ditemukan.', [
                'id' => ['Data tidak tersedia.']
            ], 404);
    }

    try {
         // Validasi duplikat
        $errors = Category::isDuplicate($data, $id);
                if (!empty($errors)) {
                 return ApiResponse::error('Validasi gagal', $errors, 400);
            }

        if (isset($data['name'])) {
            $data['slug'] = Str::slug($data['name']);
        }

        $category->update($data);

        return ApiResponse::success(new CategoryResponse($category), 'Success Update category', 200);
    } catch (\Illuminate\Database\QueryException $e) {
        return ApiResponse::error('Gagal update category (query error)', [
            'exception' => config('app.debug') ? $e->getMessage() : null
        ], 422);
    } catch (\Exception $e) {
        return ApiResponse::error('Failed to update category', [
            'exception' => config('app.debug') ? $e->getMessage() : 'Please try again later'
        ], 500);
    }
}


public function destroy(string $id)
{
    try {
        $category = $this->Category->find($id);

       if (!$category) {
            return ApiResponse::error('Kategori dengan ID tersebut tidak ditemukan.', [
                'id' => ['Data tidak tersedia.']
            ], 404);
        }

        $category->delete();

        return ApiResponse::success(new CategoryResponse($category), 'Success Delete category', 200);
    } catch (\Exception $e) {
        return ApiResponse::error('Failed to delete category', [
            'exception' => config('app.debug') ? $e->getMessage() : null
        ], 500);
    }
}

}
