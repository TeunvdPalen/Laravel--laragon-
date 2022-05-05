<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaatschappelijkController extends Controller
{
    public function index()
    {
        return view('maatschappelijk.index');
    }

    public function aaihonden()
    {
        return view('maatschappelijk.aaihonden');
    }

    public function verhalen()
    {
        return view('maatschappelijk.verhalen');
    }
}
