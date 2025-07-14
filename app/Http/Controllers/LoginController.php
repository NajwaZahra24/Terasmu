<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {

        // dd('LoginController reached'); // this should appear if it's working
        // Validate input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        // Attempt login langsung
        if (Auth::attempt($credentials, $remember)) {
            $user = Auth::user();

            // Cek role
            if ($user->role === 'admin') {
                return redirect()->route('admin.products.index')->with('success', 'Selamat datang, Admin!');
            } else {
                return redirect()->route('home')->with('success', 'Login successful!');
            }
            
        }

        // Kalau gagal login
        return back()->withErrors([
            'email' => 'Email or password is incorrect',
        ]);
    }

}
