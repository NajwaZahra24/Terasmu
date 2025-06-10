<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;  // Menggunakan model User standar Laravel

class AuthController extends Controller
{
    /**
     * Menampilkan halaman registrasi
     */
    public function showRegister()
    {
        return view('auth.register');  // Diubah ke 'auth.register' (konvensi Laravel)
    }

    /**
     * Proses registrasi pengguna baru
     */
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users', // Mengacu ke tabel users
            'password' => 'required|string|min:8|confirmed', // Minimal 8 karakter
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        Auth::login($user);

        return redirect()->route('dashboard')
               ->with('success', 'Registrasi berhasil! Anda telah login.');
    }

    /**
     * Menampilkan halaman login
     */
    public function showLogin()
    {
        return view('auth.login');
    }

    /**
     * Proses autentikasi pengguna
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'Email atau password yang Anda masukkan salah.',
        ])->onlyInput('email');
    }

    /**
     * Menampilkan dashboard
     */
    public function dashboard()
    {
        return view('dashboard');
    }

    /**
     * Proses logout pengguna
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('status', 'Anda telah logout!');
    }
}