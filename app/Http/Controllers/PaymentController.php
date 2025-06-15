<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Furnitur; // Pastikan ini sesuai nama model kamu (misal: Product atau Furniture)

class PaymentController extends Controller
{
    // Menampilkan halaman payment kosong (jika dibutuhkan)
    public function index()
    {
        return view('payment');
    }

    // Menampilkan halaman payment berdasarkan produk yang dibeli
    public function showPayment(Request $request)
    {
        // Validasi data request
        $request->validate([
            'produk_id' => 'required|exists:furniturs,id', // pastikan 'furniturs' adalah nama tabelmu
            'jumlah' => 'required|integer|min:1',
        ]);

        // Ambil data produk berdasarkan ID
        $produk = Furnitur::findOrFail($request->produk_id);
        $jumlah = $request->jumlah;
        $subtotal = $produk->harga * $jumlah;

        // Kirim data ke view
        return view('payment', compact('produk', 'jumlah', 'subtotal'));
    }
}
