<?php

namespace App\Http\Controllers;

use App\Models\Furnitur;
use Illuminate\Http\Request;

class FurniturController extends Controller
{
    // ==============================
    // HALAMAN PENGUNJUNG / USER
    // ==============================

    public function index(Request $request)
    {
        $query = Furnitur::with('detail');
        
        if ($request->has('keyword') && !empty($request->keyword)) {
            $query->where('name', 'LIKE', '%'.$request->keyword.'%');
        }

        if ($request->has('id') && !empty($request->id)) {
            $query->where('id', $request->id);
        }

        if ($request->has('category') && !empty($request->category)) {
            $query->where('category', $request->category);
        }

        $furniturs = $query->paginate(12);

        return view('katalog', compact('furniturs'));
    }

    public function search(Request $request)
    {
        $request->validate([
            'keyword' => 'required_without:id|string|min:2',
            'id' => 'required_without:keyword|numeric',
            'category' => 'nullable|string'
        ]);

        $furniturs = Furnitur::with('detail')
            ->when($request->keyword, fn($q) => $q->where('name', 'LIKE', '%'.$request->keyword.'%'))
            ->when($request->id, fn($q) => $q->where('id', $request->id))
            ->when($request->category, fn($q) => $q->where('category', $request->category))
            ->paginate(12);

        if ($furniturs->isEmpty()) {
            return back()->with('error', 'Produk tidak ditemukan');
        }

        return view('katalog', compact('furniturs'));
    }

    public function show($id)
    {
        $produk = Furnitur::with('detail')->findOrFail($id);
        return view('detailproduk', compact('produk'));
    }

    // ==============================
    // HALAMAN ADMIN / CRUD PRODUK
    // ==============================

    public function adminIndex()
    {
        $furniturs = Furnitur::all();
        return view('admin.crproduct', compact('furniturs')); // <-- dikoreksi di sini
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'category' => 'nullable|string|max:100',
            'description' => 'nullable|string',
        ]);

        Furnitur::create($request->all());

        return redirect()->route('admin.crproduct.index')->with('success', 'Produk berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $produk = Furnitur::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'category' => 'nullable|string|max:100',
            'description' => 'nullable|string',
        ]);

        $produk->update($request->all());

        return redirect()->route('admin.crproduct.index')->with('success', 'Produk berhasil diupdate');
    }

    public function destroy($id)
    {
        $produk = Furnitur::findOrFail($id);
        $produk->delete();

        return redirect()->route('admin.crproduct.index')->with('success', 'Produk berhasil dihapus');
    }
}
