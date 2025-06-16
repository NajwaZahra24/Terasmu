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
        // Validate input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        // Grab user based on email
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'Email not registered']);
        }

        // Check password
        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return back()->withErrors(['password' => 'Password incorrect']);
        }

        if (Auth::attempt($credentials, $remember)) {
            // success logic...
        }


        // Login success, now check role
        if ($user->role === 'admin') {
            return redirect('/admin')->with('success', 'Selamat datang, Admin!');
        } else {
            return redirect()->route('home')->with('success', 'Login successful!');

        }
    }
}
