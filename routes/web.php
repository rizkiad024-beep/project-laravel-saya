<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\InfoController;
use Illuminate\Support\Facades\Route;

// Halaman Public
Route::get('/', [InfoController::class, 'index']);
Route::get('/tentang', [InfoController::class, 'tentang'])->name('tentang');
Route::post('/tentang', [InfoController::class, 'store'])->name('tentang.store');
Route::get('/info-terkini', [InfoController::class, 'show'])->name('info.latest');
Route::get('/info/{id}', [InfoController::class, 'show'])->name('info.show');

// Route untuk Guest (Hanya bisa diakses kalau BELUM login)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

// Route untuk Auth (Hanya bisa diakses kalau SUDAH login)
Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
});
