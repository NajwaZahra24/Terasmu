<?php

use App\Http\Controllers\HomeController; // Import class

// Gunakan sintaks lengkap (Laravel 8+)
Route::get('/', [HomeController::class, 'index']);

// Atau jika pakai string (Laravel < 8)
Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::get('/katalog', function () {
    // Kirimkan data produk ke view
    $products = [
        [
            'nama' => 'Nama Produk 1',
            'deskripsi' => 'Deskripsi singkat produk 1.',
            'harga' => 150000,
            'gambar' => 'https://via.placeholder.com/250x200',
        ],
        [
            'nama' => 'Nama Produk 2',
            'deskripsi' => 'Deskripsi singkat produk 2.',
            'harga' => 200000,
            'gambar' => 'https://via.placeholder.com/250x200',
        ],
        [
            'nama' => 'Nama Produk 3',
            'deskripsi' => 'Deskripsi singkat produk 3.',
            'harga' => 180000,
            'gambar' => 'https://via.placeholder.com/250x200',
        ],
    ];

    return view('katalog', compact('products'));
});
