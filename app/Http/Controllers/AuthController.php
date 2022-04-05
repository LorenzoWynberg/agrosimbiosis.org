<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\SocialProvider;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RegisterRequest;
use Laravel\Socialite\Facades\Socialite;

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

    public function logout(Request $request)
    {
        Auth::logout();
     
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect()->route('home');
    }

    public function socialRedirect($social)
    {
        return Socialite::driver($social)->redirect();
    }

    public function socialCallback($social)
    {
        $userSocial = Socialite::driver($social)->stateless()->user();
        $socialProvider = SocialProvider::where('external_id', $userSocial->id)->where('external_auth', $social)->first();
        $userExists = false;
        $userNeedsProvider = false;

        if($socialProvider){
            $userExists = $socialProvider->user()->first();
        }

        if(!$userExists){
            $userNeedsProvider = true;
            $userExists = User::where('email', $userSocial->email)->first();
        }

        if(!$userExists){
            $userExists = User::create(
                [
                    'name' => $userSocial->name,
                    'username' => $userSocial->name,
                    'email' => $userSocial->email, 
                    'avatar' => $userSocial->avatar,
                ]
            );
        }

        if($userNeedsProvider){
            SocialProvider::create(
                [
                    'user_id' => $userExists->id,
                    'external_id' => $userSocial->id,
                    'external_auth' => $social,
                ]
            );
        }

        Auth::login($userExists);

        return redirect()->route('home');
    }
}