<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request; // Ini sudah benar
use Illuminate\Support\Facades\Auth; // Tambahkan ini agar aman

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Tempat redirect setelah login berhasil.
     */
    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Override fungsi username agar Laravel tahu kita login pakai kolom 'username'
     */
    public function username()
    {
        return 'username';
    }

    /**
     * Fungsi login yang sudah diperbaiki
     */
    public function login(Request $request) // PERBAIKAN: R Besar
    {
        // 1. Validasi input
        $this->validate($request, [
            'username' => 'required|string',
            'password' => 'required|string|min:6',
        ]);

        // 2. Siapkan data login
        // PERBAIKAN: $logintype diganti langsung jadi string 'username'
        $login = [
            'username' => $request->username,
            'password' => $request->password
        ];

        // 3. Coba Login
        if (Auth::attempt($login)) {
            // Jika berhasil
            return redirect()->route('home');
        }

        // 4. Jika gagal, balik ke halaman login dengan pesan error
        return redirect()->route('login')->with(['error' => 'Username atau Password salah!']);
    }
}