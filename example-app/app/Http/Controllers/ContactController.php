<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact() {
        return view('contact');
    }

    public function succes() {
        return view('succes');
    }
}