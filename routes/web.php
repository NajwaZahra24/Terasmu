<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FurniturController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


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
    Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register.form');
    Route::post('/register', [RegisterController::class, 'register'])->name('register');
    
    
    // Login
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
    Route::post('/login', [LoginController::class, 'login'])->name('login');
    
    // Logout
    Route::post('/logout', 'logout')->name('logout');
    
    // Dashboard (➡️ DIHAPUS middleware auth)
    Route::get('/dashboard', 'dashboard')->name('dashboard');
});

// Crproduct Routes (admin CRUD) ➡️ TANPA middleware auth
Route::prefix('admin')->group(function () {
    Route::get('crproduct', [FurniturController::class, 'adminIndex'])->name('admin.crproduct.index');
    Route::post('crproduct', [FurniturController::class, 'store'])->name('admin.crproduct.store');
    Route::get('crproduct/{id}/edit', [FurniturController::class, 'edit'])->name('admin.crproduct.edit');
    Route::put('crproduct/{id}', [FurniturController::class, 'update'])->name('admin.crproduct.update');
    Route::delete('crproduct/{id}', [FurniturController::class, 'destroy'])->name('admin.crproduct.destroy');
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

// Proses pembelian: kirim data produk ke halaman payment
Route::post('/payment', [PaymentController::class, 'show'])->name('payment.show');


// Riwayat Pembelian (➡️ TANPA middleware auth)
Route::get('/riwayat', function () {
    return view('riwayat');
});
