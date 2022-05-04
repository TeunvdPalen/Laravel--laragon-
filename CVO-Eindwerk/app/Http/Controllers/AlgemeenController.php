<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlgemeenController extends Controller
{
    public function index()
    {
        return view('algemeen.index');
    }

    public function nieuws()
    {
        return view('algemeen.nieuws');
    }

    public function smoelenboek()
    {
        return view('algemeen.smoelenboek');
    }

    public function contact()
    {
        return view('algemeen.contact');
    }
}