<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;    


class OrderController extends Controller
{
    public function create(Request $request)
    {
        if (!$request->has(['product_id', 'quantity'])) {
            return redirect()->back()->with('error', 'Data produk tidak lengkap.');
        }

        $produk = \App\Models\Furnitur::findOrFail($request->product_id);

        return view('payment', [
            'furnitur' => $produk,
            'quantity' => $request->quantity
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'order_date' => 'required|date',
            'product_name' => 'required|string',
            'quantity' => 'required|integer|min:1',
            'subtotal' => 'required|numeric',
            'total' => 'required|numeric',
            'payment_method' => 'required|string',
        ]);

        Order::create($request->all());

        return redirect()->route(route: 'katalog')->with('success', 'Pesanan berhasil dikirim!');
    }

    public function index()
    {
        $orders = Order::latest()->get();
        return view('payment', compact('orders'));
    }
}
