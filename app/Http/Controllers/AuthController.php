<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function viewLogin()
    {
        return view('auth.login', [
            'title' => 'Halaman Login'
        ]);
    }

    public function viewRegister()
    {
        return view('auth.register', [
            'title' => 'Halaman Daftar Akun'
        ]);
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            "name" => "required|min:8|unique:users",
            "password" => "required|min:8|max:255",
            "confirm-password" => "required|min:8|max:255|same:password",
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);

        return redirect('/auth/login')->with('success', 'Berhasil mendaftar user baru');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            "name" => "required|exists:users",
            "password" => "required",
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/posyandu/location')->with('success', 'Selamat datang di Sistem Informasi Posyandu');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/auth/login');
    }
}
