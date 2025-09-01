<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Users; // Pastikan menggunakan model User bawaan Laravel
use Tymon\JWTAuth\Facades\JWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException;

class AuthController extends Controller
{
    /**
     * Daftarkan pengguna baru dan kembalikan token JWT.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        // Validasi data input
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|unique:users',
            'password' => 'required|string|min:6',
        ]);

        // Buat pengguna baru
        $user = Users::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => bcrypt($request->password), // Enkripsi password
        ]);

        // Buat token dari objek pengguna
        $token = JWTAuth::fromUser($user);

        // Kembalikan respons JSON dengan token
        return response()->json([
            'status' => true,
            'message' => 'User registered successfully',
            'user'   => $user,
            'token'  => $token,
        ], 201); // Gunakan status 201 Created
    }

    /**
     * Tangani otentikasi pengguna dan kembalikan token JWT.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        try {
            // Coba untuk membuat token dari kredensial
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['error' => 'Email atau password salah'], 401);
            }
        } catch (JWTException $e) {
            // Jika gagal membuat token
            return response()->json(['error' => 'Gagal membuat token'], 500);
        }

        // Kembalikan respons JSON dengan token dan detail pengguna
        return response()->json([
            'status'       => true,
            'user'         => auth()->user(),
            'access_token' => $token,
            'token_type'   => 'bearer',
            'expires_in'   => auth()->factory()->getTTL() * 60, // detik
        ]);
    }


    
    /**
     * Logout pengguna dengan menginvalidasi token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        try {
            // Ambil token dari permintaan
            $token = JWTAuth::getToken();
            // Invalidasi token
            JWTAuth::invalidate($token);
            return response()->json([
                 'success' => true,
                 'message' => 'Logout berhasil',
            ]);
        } catch (JWTException $e) {
            // Tangani jika terjadi error saat mencoba menginvalidasi token
            return response()->json(['error' => 'Gagal menginvalidasi token'], 500);
        }
    }

    /**
     * Dapatkan profil pengguna yang sedang login.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function profile()
    {
        // Mendapatkan data pengguna dari token
        return response()->json(auth()->user());
    }

    /**
     * Perbarui token JWT yang kedaluwarsa.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        // Dapatkan token baru
        return response()->json([
            'access_token' => JWTAuth::refresh(JWTAuth::getToken()),
            'token_type'   => 'bearer',
            'expires_in'   => auth()->factory()->getTTL() * 60,
        ]);
    }
}