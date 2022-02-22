<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin() {
        return view('admin/index');
    }

    public function contactBerichten() {
        return view('admin/contact-berichten');
    }

    public function nieuwsBerichten() {
        return view('admin/nieuws-berichten');
    }

    public function privacy() {
        return view('admin/privacy');
    }
}