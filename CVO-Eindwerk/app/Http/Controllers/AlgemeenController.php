<?php

namespace App\Http\Controllers;

use App\Models\Member;
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
        $members = Member::all();
        return view('algemeen.smoelenboek', [
            'members' => $members,
        ]);
    }

    public function contact()
    {
        return view('algemeen.contact');
    }
}