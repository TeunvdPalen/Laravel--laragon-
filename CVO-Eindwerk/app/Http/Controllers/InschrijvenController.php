<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InschrijvenController extends Controller
{
    public function index()
    {
        return view('inschrijven.index');
    }

    public function handleInschrijven(Request $request)
    {
        $request->validate([
            'naam' => 'required',
            'voornaam' => 'required',
            'email' => 'required|email|unique:users,email',
        ]);

        //$inschrijving = new Inschrijving();

        return redirect()->route('login');
    }
}