<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursusController extends Controller
{
    public function index()
    {
        return view('cursus.index');
    }

    public function lidmaatschap()
    {
        return view('cursus.lidmaatschap');
    }

    public function opvoeden()
    {
        return view('cursus.opvoeden');
    }

    public function trainingsmiddelen()
    {
        return view('cursus.trainingsmiddelen');
    }
}