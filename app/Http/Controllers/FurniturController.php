<?php
namespace App\Http\Controllers;

use App\Models\Furnitur;

class FurniturController extends Controller
{
    public function index()
    {
        $furniturs = Furnitur::with('detail')->get();
        return view('katalog', compact('furniturs'));
    }

    public function show($id)
    {
        $produk = Furnitur::with('detail')->findOrFail($id);
        return view('detailproduk', compact('produk'));
    }
}