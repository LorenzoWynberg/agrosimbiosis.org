<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        if ($request->isMethod('post'))
        {
            dd($request->all());
        }

        return view('pages.auth.login');
    }

    public function register(Request $request)
    {
        if ($request->isMethod('post'))
        {
            dd($request->all());
        }

        return view('pages.auth.register');
    }

}
