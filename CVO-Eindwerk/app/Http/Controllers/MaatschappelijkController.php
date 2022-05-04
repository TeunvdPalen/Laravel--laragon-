<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaatschappelijkController extends Controller
{
    public function index()
    {
        return view('maatschappelijk.index');
    }
}