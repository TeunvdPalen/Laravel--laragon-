<?php

namespace App\Http\Controllers;

use App\Models\Hond;
use App\Models\Cursus;
use App\Models\Inschrijving;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InschrijvenController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $honds = Hond::where('user_id', $user->id)->get();
        $cursus = Cursus::all();
        return view('inschrijven.index', [
            'honds' => $honds,
            'cursus' => $cursus,
        ]);
    }

    public function handleInschrijven(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'cursus' => 'required',
            'hond' => 'required',
        ]);

        $inschrijving = new Inschrijving();
        $inschrijving->user_id = $user->id;
        $inschrijving->cursus_id = $request->cursus;
        $inschrijving->hond_id = $request->hond;
        $inschrijving->save();

        return redirect()->route('home.index');
    }
}