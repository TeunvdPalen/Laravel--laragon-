<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HondensportController extends Controller
{
    public function index()
    {
        return view('hondensport.index');
    }

    public function agility()
    {
        return view('hondensport.agility');
    }

    public function obedience()
    {
        return view('hondensport.obedience');
    }

    public function recreanten()
    {
        return view('hondensport.recreanten');
    }

    public function sportnieuws()
    {
        return view('hondensport.sportnieuws');
    }
}