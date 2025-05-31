<?php

namespace App\Http\Controllers;

use App\Models\Furnitur;
use Illuminate\Http\Request;

class FurniturController extends Controller
{
    /**
     * Menampilkan halaman katalog produk
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        // Query dasar dengan eager loading relasi detail
        $query = Furnitur::with('detail');
        
        // Filter berdasarkan pencarian keyword (nama produk)
        if ($request->has('keyword') && !empty($request->keyword)) {
            $query->where('name', 'LIKE', '%'.$request->keyword.'%');
        }
        
        // Filter berdasarkan ID jika ada
        if ($request->has('id') && !empty($request->id)) {
            $query->where('id', $request->id);
        }
        
        // Filter berdasarkan kategori
        if ($request->has('category') && !empty($request->category)) {
            $query->where('category', $request->category);
        }
        
        // Pagination dengan 12 item per halaman
        $furniturs = $query->paginate(12);
        
        return view('katalog', compact('furniturs'));
    }

    /**
     * Menampilkan hasil pencarian produk
     *
     * @param Request $request
     * @return \Illuminate\View\View
     */
    public function search(Request $request)
    {
        // Validasi input
        $request->validate([
            'keyword' => 'required_without:id|string|min:2',
            'id' => 'required_without:keyword|numeric',
            'category' => 'nullable|string'
        ]);
        
        // Query pencarian
        $furniturs = Furnitur::with('detail')
            ->when($request->keyword, function($query) use ($request) {
                return $query->where('name', 'LIKE', '%'.$request->keyword.'%');
            })
            ->when($request->id, function($query) use ($request) {
                return $query->where('id', $request->id);
            })
            ->when($request->category, function($query) use ($request) {
                return $query->where('category', $request->category);
            })
            ->paginate(12);
        
        // Jika hasil pencarian kosong
        if($furniturs->isEmpty()) {
            return back()->with('error', 'Produk tidak ditemukan');
        }
        
        return view('katalog', compact('furniturs'));
    }

    /**
     * Menampilkan detail produk
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $produk = Furnitur::with('detail')->findOrFail($id);
        return view('detailproduk', compact('produk'));
    }
}