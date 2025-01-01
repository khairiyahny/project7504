<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
// use Illuminate\Support\Facades\Hash; //kalau pake hash

class SocialAuthController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        // Cari pengguna berdasarkan email
        $existingUser = User::where('email', $user->getEmail())->first();

        if ($existingUser) {
            Auth::login($existingUser);
        } else {
            // Buat akun baru jika tidak ditemukan
            $newUser = User::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                // 'password' => bcrypt(Str::random(8)), // pake enkripsi/hash
                'password' => Str::random(8), // tanpa
            ]);

            Auth::login($newUser);
        }

        return redirect('/backend'); 
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $request->input('username'))->first();

        // if ($user && Hash::check($request->input('password'), $user->password)) { // kalau hash
        if ($user && $request->input('password') === $user->password) {
            Auth::login($user);
            return redirect('/backend');
        }

        return back()->withErrors(['username' => 'Invalid credentials']);
    }
}
