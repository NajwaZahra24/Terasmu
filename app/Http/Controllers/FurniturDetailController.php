<?php

namespace App\Http\Controllers;

use App\Models\FurniturDetail;

class FurniturDetailController extends Controller
{
    public function show($id);

    $detailFurniturs = FurniturDetail::all();
    return view('fulldetailproduk', compact('fullproduk'));
}
