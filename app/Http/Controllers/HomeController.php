<?php

namespace App\Http\Controllers; // Pastikan ini ada

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }
}