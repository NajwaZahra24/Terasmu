<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Furnitur;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // SHOW ALL
    public function index()
    {
        $furniturs = Furnitur::all();
        return view('admin.userdata', compact('furniturs'));
    }

    // SHOW CREATE FORM
    public function create()
    {
        return view('admin.crproduct');
    }

    // STORE NEW ITEM
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            // add other fields as needed
        ]);

        Furnitur::create($request->all());

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }

    // SHOW SINGLE ITEM (OPTIONAL)
    public function show($id)
    {
        $furnitur = Furnitur::findOrFail($id);
        return view('admin.userdata', compact('furnitur'));
    }

    // SHOW EDIT FORM
    public function edit($id)
    {
        $furnitur = Furnitur::findOrFail($id);
        return view('admin.editproduct', compact('furnitur'));
    }

    // UPDATE ITEM
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            // add other fields as needed
        ]);

        $furnitur = Furnitur::findOrFail($id);
        $furnitur->update($request->all());

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
    }

    // DELETE ITEM
    public function destroy($id)
    {
        $furnitur = Furnitur::findOrFail($id);
        $furnitur->delete();

        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');
    }
}
