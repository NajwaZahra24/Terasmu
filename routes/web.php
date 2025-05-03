<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController; // <- Tambahkan ini

// Homepage
Route::get('/', [HomeController::class, 'index']);

// Halaman katalog
Route::get('/katalog', [ProductController::class, 'index'])->name('katalog');

// Halaman detail produk
Route::get('/produk/{id}', [ProductController::class, 'show'])->name('produk.detail');
