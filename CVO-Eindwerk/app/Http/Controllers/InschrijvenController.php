<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InschrijvenController extends Controller
{
    public function index()
    {
        return view('inschrijven.index');
    }
}