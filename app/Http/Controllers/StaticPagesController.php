<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function andy()
    {
        return view('pages.team.andy');
    }

    public function lore()
    {
        return view('pages.team.lore');
    }

    public function dasha()
    {
        return view('pages.team.dasha');
    }
}
