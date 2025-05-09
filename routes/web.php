<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PaymentController;

// Homepage
Route::get('/', [HomeController::class, 'index']);

// halaman signin
Route::get('/signin', [AuthController::class, 'showSignInForm'])->name('signin');

// Halaman katalog
Route::get('/katalog', [ProductController::class, 'index'])->name('katalog');

// Halaman detail produk
Route::get('/produk/{id}', [ProductController::class, 'show'])->name('produk.detail');

// Halaman payment
Route::get('/payment', [PaymentController::class, 'index'])->name('payment');