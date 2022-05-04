<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HondensportController extends Controller
{
    public function index()
    {
        return view('hondensport.index');
    }
}