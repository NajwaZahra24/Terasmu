<?php

namespace App\Http\Controllers;

use App\Models\Furnitur;

class FurniturController extends Controller
{
    public function index()
    {
        $furniturs = Furnitur::all();

        return view('katalog', compact('furniturs'));
    }
    public function show($id)
    {
        $produk = Furnitur::findOrFail($id); // or use your actual model
        return view('detailproduk', compact('produk'));
    }
}
