<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PaymentController; // <- Tambahkan ini

// Homepage
Route::get('/', [HomeController::class, 'index']);

// Halaman katalog
Route::get('/katalog', [ProductController::class, 'index'])->name('katalog');

// Halaman detail produk
Route::get('/produk/{id}', [ProductController::class, 'show'])->name('produk.detail');

// Halaman payment
Route::get('/payment', [PaymentController::class, 'index'])->name('payment');