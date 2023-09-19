<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function cek_login(Request $request)
    {
        $password = $request->input('password');
        $username = $request->input('username');

        if (Auth::attempt(['username' => $username, 'password' => $password])) {
            return redirect()->intended('/home')->with('success', 'login berhasil');
        } else {
            return redirect()->intended('/')->with('error', 'username atau password salah');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect('/');
    }
}
