<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware(['jwt.auth'])->group(function () {
    Route::get('profile', [AuthController::class, 'profile']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
});

Route::middleware(['jwt.auth'])->group(function () {
Route::get('category', [CategoryController::class, 'index'])->name('api.category');
Route::get('category-detail/{id}', [CategoryController::class, 'show'])->name('api.show.category');
Route::post('category-create', [CategoryController::class, 'store'])->name('api.add.category');         
Route::put('category-update/{id}', [CategoryController::class, 'update'])->name('api.update.category');  
Route::delete('category-delete/{id}', [CategoryController::class, 'destroy'])->name('api.delete.category');
});

