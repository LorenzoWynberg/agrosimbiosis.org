<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('pages.auth.login');
    }

    public function register()
    {
        return view('pages.auth.register');
    }

    public function loginPost(LoginRequest $request)
    {
        if (Auth::attempt($request->except('_token'))) {
            $request->session()->regenerate();
            return redirect()->route('home');
        }
 
        return back()->withErrors([
            'email' => 'Correo no encontrado, desea <a href="' . route('register') . '">crear una cuenta?</a>',
            'password' => 'Contraseña incorrecta',
        ]);
    }

    public function registerPost(RegisterRequest $request)
    {
        $user = User::create(request(['name', 'email', 'password', 'username']));
        Auth::login($user);
        return redirect()->route('home');
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        Auth::logout();
     
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect()->route('home');
    }
}