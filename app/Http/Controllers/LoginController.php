<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function actionLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            // Mendapatkan nama level pengguna
            $userLevel = Auth::user()->level->nama_level;

            // Redirect berdasarkan level pengguna
            if ($userLevel == 'admin' || $userLevel == 'operator' || $userLevel == 'kepsek') {
                return redirect()->to('admin/dashboard');
            } else {
                Auth::logout();
                return redirect()->back()->withErrors([
                    'email' => 'You do not have access to the admin area.',
                ]);
            }
        }

        return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }



    public function register()
    {
        return view('register');
    }

    public function actionRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        User::create($request->all());
        // Alert::success('Mantap', 'Masoooook Gan');
        return redirect()->to('register')->with('success', 'Register Berhasil');
    }

    function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route("admin.login"))->with("success", "Ditunggu Kedatangan-nya Kembali!!!!!");
    }
}
