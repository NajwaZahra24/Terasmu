<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Furnitur;

class FurniturController extends Controller
{
    public function index()
    {
        $furniturItems = Furnitur::where('is_available', 1)->get();
        return view('katalog', compact('furniturItems'));
    }
}