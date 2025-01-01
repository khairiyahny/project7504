<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    // Menampilkan form untuk mengubah password
    public function showPasswordForm()
    {
        return view('auth.change-password');  // Sesuaikan dengan nama view Anda
    }

    // Memproses pengubahan password
    public function updatePassword(Request $request)
    {
        // Validasi input
        $request->validate([
            'password' => 'required|string|min:8|confirmed',  // Pastikan password panjangnya minimal 8 karakter dan terkonfirmasi
        ]);

        // Update password
        $user = Auth::user();  // Mendapatkan pengguna yang sedang login
        $user->password = Hash::make($request->password);  // Menggunakan bcrypt untuk hashing password
        $user->save();  // Menyimpan password yang sudah di-hash ke database

        return redirect()->route('password.change')->with('status', 'Password berhasil diubah');
    }
}

