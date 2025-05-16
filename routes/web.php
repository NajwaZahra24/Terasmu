<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FurniturController;
use App\Http\Controllers\PaymentController;

// Homepage
Route::get('/', [HomeController::class, 'index']);

// Halaman signup
Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup');

// Halaman katalog
Route::get('/katalog', [FurniturController::class, 'index'])->name('katalog');

// Halaman detail produk
Route::get('/produk/{id}', [FurniturController::class, 'show'])->name('produk.detail');

// Halaman Kontak
Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

// Halaman Tentang Kami
Route::get('/tentangkami', function () {
    return view('tentangkami');
})->name('tentangkami');

// Halaman payment
Route::get('/payment', [PaymentController::class, 'index'])->name('payment');

Route::get('/furnitur', [FurniturController::class, 'index']);