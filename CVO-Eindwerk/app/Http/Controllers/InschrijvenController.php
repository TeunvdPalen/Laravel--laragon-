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
            'name' => 'required',
            'firstName' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|numeric',
            'street' => 'required',
            'houseNumber' => 'requierd',
            'city' => 'required',

            'dogName' => 'required',
            'dogSex' => 'required',
            'dogBreed' => 'required',
            'dogBirthday' => 'required',

            'cursus' => 'required'
        ]);

        //$inschrijving = new Inschrijving();

        return redirect()->route('login');
    }
}
