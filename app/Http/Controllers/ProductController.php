<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Tampilkan katalog produk
    public function index()
    {
        $produk = [
            1 => ['nama' => 'Meja Minimalis', 'harga' => 200000, 'deskripsi' => 'Cocok untuk ruang tamu.'],
            2 => ['nama' => 'Kursi Kayu', 'harga' => 150000, 'deskripsi' => 'Nyaman dan kokoh.'],
            3 => ['nama' => 'Rak Buku', 'harga' => 180000, 'deskripsi' => 'Buat simpan buku favoritmu.'],
        ];

        return view('katalog', compact('produk'));
    }

    // Tampilkan detail produk
    public function show($id)
    {
        $produk = [
            1 => ['nama' => 'Meja Minimalis', 'harga' => 200000, 'deskripsi' => 'Cocok untuk ruang tamu.'],
            2 => ['nama' => 'Kursi Kayu', 'harga' => 150000, 'deskripsi' => 'Nyaman dan kokoh.'],
            3 => ['nama' => 'Rak Buku', 'harga' => 180000, 'deskripsi' => 'Buat simpan buku favoritmu.'],
        ];

        if (!array_key_exists($id, $produk)) {
            abort(404); // Produk tidak ditemukan
        }

        return view('detail', ['produk' => $produk[$id]]);
    }
}
