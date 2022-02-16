<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {

        $name = 'Teun';
        $greeting = 'Goeiemiddag';
        $logged_in = false;

        return view('home', [
            'name' => $name,
            'greeting' => $greeting,
            'logged_in' => $logged_in
        ]);
    }

    public function welcome() {
    return view('welcome');
    }
}