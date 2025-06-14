<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Crproduct;
use Illuminate\Http\Request;

class CrproductController extends Controller
{
    // Tampilkan semua produk ke halaman admin.crproduct
    public function index()
    {
        $products = Crproduct::all();
        return view('admin.crproduct', compact('products'));
    }

    // Simpan produk baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'original_price' => 'nullable|numeric',
            'label' => 'nullable|in:Terlaku,Baru,Diskon,Terbatas',
            'rating' => 'nullable|integer|min:0|max:5',
            'rating_count' => 'nullable|integer',
            'image_path' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'is_available' => 'required|boolean',
        ]);

        $data = $request->all();

        if ($request->hasFile('image_path')) {
            $file = $request->file('image_path');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('gambar'), $filename);
            $data['image_path'] = $filename;
        }

        Crproduct::create($data);

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan!');
    }

    // Update produk berdasarkan ID
    public function update(Request $request, $id)
    {
        $product = Crproduct::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'category' => 'required',
            'price' => 'required|numeric',
            'original_price' => 'nullable|numeric',
            'label' => 'nullable|in:Terlaku,Baru,Diskon,Terbatas',
            'rating' => 'nullable|integer|min:0|max:5',
            'rating_count' => 'nullable|integer',
            'image_path' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'is_available' => 'required|boolean',
        ]);

        $data = $request->all();

        if ($request->hasFile('image_path')) {
            $file = $request->file('image_path');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('gambar'), $filename);
            $data['image_path'] = $filename;
        }

        $product->update($data);

        return redirect()->back()->with('success', 'Produk berhasil diperbarui!');
    }

    // Hapus produk berdasarkan ID
    public function destroy($id)
    {
        $product = Crproduct::findOrFail($id);
        $product->delete();

        return redirect()->back()->with('success', 'Produk berhasil dihapus!');
    }
}
