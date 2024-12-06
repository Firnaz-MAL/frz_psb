<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class IsiformulirController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:255',
            'sumber' => 'required|string|max:255',
            'cabang' => 'required|string|max:255',
            'program' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);

        User::create([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'sumber' => $request->sumber,
            'cabang' => $request->cabang,
            'program' => $request->program,
            'email' => $request->email,
            'password' => $request->md5->password,
        ]);

    // Simpan data atau proses lainnya
    return redirect()->route('login')->with('success', 'Pendaftaran berhasil! Silakan login.');

    }

   
public function login(Request $request)
{
    // Validasi input
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Coba login dengan kredensial yang diberikan
    if (Auth::attempt($request->only('email', 'password'))) {
        // Regenerasi session setelah login
        $request->session()->regenerate();

        // Redirect ke halaman yang dituju atau rumah
        return redirect()->intended(route('rumah'))->with('success', 'Login berhasil!');
    }

    // Jika login gagal, kembali dengan error
    return back()->withErrors([
        'email' => 'Email atau password salah.',
    ]);
}


        // Fungsi logout
        public function logout()
        {
            Auth::logout(); // Logout pengguna
            return redirect('/')->with('success', 'Anda telah logout.');
        }


}
