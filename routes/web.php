<?php

use App\Http\Controllers\FurniturDetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FurniturController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CrproductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Halaman Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Authentication Routes
Route::controller(AuthController::class)->group(function () {
    // Registration
    Route::get('/regist', 'showRegister')->name('regist');
    Route::post('/regist', 'register');
    
    // Login
    Route::get('/login', 'showLogin')->name('login');
    Route::post('/login', 'login');
    
    // Logout
    Route::post('/logout', 'logout')->name('logout');
    
    // Dashboard (protected by auth middleware)
    Route::get('/dashboard', 'dashboard')->middleware('auth')->name('dashboard');
});

// Crproduct Routes (admin CRUD)
Route::prefix('admin')->middleware('auth')->group(function () {
    // Menampilkan semua produk
    Route::get('crproduct', [CrproductController::class, 'index'])->name('admin.crproduct.index');

    // Menambah produk baru
    Route::post('crproduct', [CrproductController::class, 'store'])->name('admin.crproduct.store');

    // Update produk
    Route::put('crproduct/{id}', [CrproductController::class, 'update'])->name('admin.crproduct.update');

    // Hapus produk
    Route::delete('crproduct/{id}', [CrproductController::class, 'destroy'])->name('admin.crproduct.destroy');
});

// Furnitur Routes
Route::controller(FurniturController::class)->group(function () {
    // Katalog Produk
    Route::get('/katalog', 'index')->name('katalog');
    Route::get('/katalog/search', 'search')->name('katalog.search'); // Route untuk pencarian
    
    // Detail Produk (dua alternatif route untuk kompatibilitas)
    Route::get('/produk/{id}', 'show')->name('produk.detail');
    Route::get('/detailproduk/{id}', 'show'); // Alternatif route
    
    // Route alternatif furnitur
    Route::get('/furnitur', 'index');
});

// Static Pages
Route::view('/kontak', 'kontak')->name('kontak');
Route::view('/tentangkami', 'tentangkami')->name('tentangkami');

// Payment Route
Route::get('/payment', [PaymentController::class, 'index'])->name('payment');

// riwayat pembelian
Route::get('/riwayat', function () {
    return view('riwayat');
});
