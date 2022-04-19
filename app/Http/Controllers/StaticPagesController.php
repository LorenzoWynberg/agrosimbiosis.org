<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;

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

    public function contact()
    {
        return view('pages.contact');
    }

    public function contactPost(ContactRequest $request)
    {
        Mail::to('info@agrosimbiosis.org')->send(new Contact($request));
        session()->flash('success', true);
        return redirect()->back()->withInput();
    }
}
