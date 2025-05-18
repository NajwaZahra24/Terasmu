<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FurniturController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

// Halaman Admin - resource route untuk user management
Route::resource('admin/users', UserController::class)->names([
    'index' => 'admin.users.index',
    'create' => 'admin.users.create',
    'store' => 'admin.users.store',
    'show' => 'admin.users.show',
    'edit' => 'admin.users.edit',
    'update' => 'admin.users.update',
    'destroy' => 'admin.users.destroy',
]);

// Halaman form registrasi
Route::get('/regist', [AuthController::class, 'showRegister'])->name('regist');
Route::post('/regist', [AuthController::class, 'register']);

// Halaman form login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Dashboard setelah login, middleware auth supaya hanya user terautentikasi bisa akses
Route::get('/dashboard', [AuthController::class, 'dashboard'])->middleware('auth')->name('dashboard');

// Logout (gunakan method POST sesuai standar Laravel)
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Homepage
Route::get('/', [HomeController::class, 'index']);

// Halaman katalog
Route::get('/katalog', [FurniturController::class, 'index'])->name('katalog');

// Halaman detail produk
Route::get('/produk/{id}', [FurniturController::class, 'show'])->name('produk.detail');

// Halaman Kontak
Route::view('/kontak', 'kontak')->name('kontak');

// Halaman Tentang Kami
Route::view('/tentangkami', 'tentangkami')->name('tentangkami');

// Halaman payment
Route::get('/payment', [PaymentController::class, 'index'])->name('payment');

// Shortcut ke furnitur (bisa juga dihapus jika sudah ada katalog)
Route::get('/furnitur', [FurniturController::class, 'index']);
