<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit()
    {
        // Ambil data pengguna yang sedang login
        $user = Auth::user();

        // Tampilkan formulir edit profil
        return view('profile.edit', compact('user'));
    }

    public function update(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
            // Tambahkan validasi lainnya jika diperlukan
        ]);

        // Ambil data pengguna yang sedang login
        $user = Auth::user();

        dd($user);

        // Update data pengguna menggunakan method update() Eloquent
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        // Redirect kembali ke halaman profil dengan pesan sukses
        return redirect()->route('profile.edit')->with('success', 'Profil berhasil diperbarui!');
    }
}
