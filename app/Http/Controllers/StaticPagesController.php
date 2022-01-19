<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function mision()
    {
        return view('pages.mision');
    }
}
