<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Str;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    // use AuthenticatesUsers;

    // /**
    //  * Where to redirect users after login.
    //  *
    //  * @var string
    //  */
    // protected $redirectTo = '/home';

    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */

    protected $redirectTo = '/backend';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    // Menampilkan form login manual
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Proses login manual
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $request->email)->first();
        
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // beda role
            if (Auth::user()->role == 'admin') {
                return redirect('/backend'); // Arahkan admin ke backend
            } else {
                return redirect('/backend/pages-blank'); // Arahkan user ke halaman blank
            }
        }

        return back()->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }

    // Redirect ke Google untuk login
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Callback setelah login melalui Google
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        $existingUser = User::where('email', $user->getEmail())->first();
    
        if ($existingUser) {
            Auth::login($existingUser);
            if (!$existingUser->password) {
                return redirect()->route('password.set');
            }
        } else {
            $newUser = User::create([
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'password' => bcrypt(Str::random(8)), // password acak untuk akun baru
                'role' => 'user', // Set role default 'user'
            ]);
            Auth::login($newUser);
        }
    
        return redirect('/backend');
    }

    //logout
    public function logout()
    {
        Auth::logout();  // Menghapus session pengguna
        return redirect('/login');  // Redirect pengguna ke halaman login
    }

    // Menampilkan form pengaturan password
    public function showSetPasswordForm()
    {
        return view('auth.set-password');
    }

    // Menyimpan password baru
    public function setPassword(Request $request)
    {
        $request->validate([
            'password' => 'required|string|min:8|confirmed', // Validasi password
        ]);

        // Mengambil user yang sedang login
        $user = Auth::user();

        $user->password = bcrypt($request->password);
        $user->save();

        // Redirect ke backend setelah password berhasil diset
        return redirect('/backend')->with('status', 'Password has been set successfully!');
    }
}
