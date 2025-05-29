<?php

namespace App\Http\Controllers;

use App\Models\FurniturDetail;

class FurniturDetailController extends Controller
{
    public function show($furnitur_id)
    {
        $detail = FurniturDetail::findOrFail($furnitur_id);
        dd($detail);
        return view('detailproduk', compact('detail'));
    }
}
