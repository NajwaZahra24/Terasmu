<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Furnitur;
use App\Models\FurniturDetail;

class FurniturController extends Controller
{
    public function index()
    {
        return Furnitur::orderByDesc("id")->with("detail:furnitur_id,full_description,material,dimensi,berat,warna")->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'original_price' => 'nullable|numeric|min:0',
            'label' => 'nullable|in:Terlaku,Baru,Diskon,Terbatas',
            'rating' => 'required|integer|min:0|max:5',
            'rating_count' => 'required|integer|min:0',
            'is_available' => 'required|boolean',


        ]);

        $validatedDetail = $request->validate([
            // 'furnitur_id' => 'required|exists:furnitur,id',
            'full_description' => 'nullable|string',
            'material' => 'nullable|string|max:65535', // text
            'dimensi' => 'nullable|string|max:65535',
            'berat' => 'nullable|integer|min:0',
            'warna' => 'nullable|string|max:65535',
        ]);

        if ($request->hasFile("image")) {
            $imagePath = $request->file("image")->store("images", "public");
            $validated["image_path"] = $imagePath;
            // dd($imagePath);
        }

        $furnitur = Furnitur::create($validated);

        $validatedDetail["furnitur_id"] = $furnitur->id;

        $furniturDetail = FurniturDetail::create($validatedDetail);

        return response()->json([$furnitur, $furniturDetail], 201);
    }

    public function show(Furnitur $furnitur)
    {
        return $furnitur;
    }

    public function update(Request $request, Furnitur $furnitur)
    {

        $furniturNow = Furnitur::findOrFail($furnitur->id);
        // $furniturWithDetail = Furnitur::where("id", $furnitur->id)->with("detail:furnitur_id,full_description,material,dimensi,berat,warna")->get();
        $furniturDetail = FurniturDetail::findOrFail($furnitur->detail->furnitur_id);
        // dd($furniturWithDetail);
        // return response()->json($furnitur->detail);
        $validated = $request->validate([
            'name' => 'sometimes|string|max:255',
            'category' => 'sometimes|string|max:255',
            'price' => 'sometimes|numeric|min:0',
            'original_price' => 'nullable|numeric|min:0',
            'label' => 'nullable|in:Terlaku,Baru,Diskon,Terbatas',
            'rating' => 'sometimes|integer|min:0|max:5',
            'rating_count' => 'sometimes|integer|min:0',
            'is_available' => 'sometimes|boolean',


        ]);

        $validatedDetail = $request->validate([
            // 'furnitur_id' => 'sometimes|exists:furnitur,id',
            'full_description' => 'nullable|string',
            'material' => 'nullable|string|max:65535', // text
            'dimensi' => 'nullable|string|max:65535',
            'berat' => 'nullable|integer|min:0',
            'warna' => 'nullable|string|max:65535',
        ]);

        if ($request->hasFile("image")) {
            $imagePath = $request->file("image")->store("images", "public");
            $validated["image_path"] = $imagePath;
            // dd($validated);
        }

        $furniturUpdated = $furnitur->update($validated);

        $validatedDetail["furnitur_id"] = $furnitur->detail->furnitur_id;

        $furniturDetailUpdated = $furniturDetail->update($validatedDetail);

        return response()->json([$furniturUpdated, $furniturDetailUpdated], 201);
    }

    public function destroy(Furnitur $furnitur)
    {
        $furnitur->delete();

        return response()->json(['message' => 'Deleted successfully']);
    }
}
