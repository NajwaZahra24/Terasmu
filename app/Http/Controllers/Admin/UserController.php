<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Regist;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil semua data user
        $users = Regist::all();
        // Kirim data ke view admin.userdata
        return view('admin.userdata', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Tampilkan form tambah user
        return view('admin.createUser'); // Buat file ini untuk form tambah
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:regist,email',
            'password' => 'required|min:6|confirmed',
        ]);

        // Simpan data user baru
        Regist::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirect ke halaman list user dengan pesan sukses
        return redirect()->route('users.index')->with('success', 'User berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Bisa untuk melihat detail user
        $user = Regist::findOrFail($id);
        return view('admin.showUser', compact('user')); // Buat file view ini jika diperlukan
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Tampilkan form edit user
        $user = Regist::findOrFail($id);
        return view('admin.editUser', compact('user')); // Buat file view ini untuk form edit
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi input
        $request->validate([
            'name' => 'required',
            'email' => "required|email|unique:regist,email,$id",
            'password' => 'nullable|min:6|confirmed',
        ]);

        $user = Regist::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;

        // Update password jika diisi
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }
        
        $user->save();

        return redirect()->route('users.index')->with('success', 'User berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = Regist::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User berhasil dihapus!');
    }
}
