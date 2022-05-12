<?php

namespace App\Http\Controllers;

use App\Models\Activitie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KalenderController extends Controller
{
    public function index()
    {
        $events = Activitie::all()->sortBy('date');
        return view('kalender.index', [
            'events' => $events
        ]);
    }

    public function handleKalender(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'title' => 'required',
            'date' => 'required',
            'description' => 'required'
        ]);

        if ($user->admin == true) {
            $activitie = new Activitie();
            $activitie->date = $request->date;
            $activitie->title = $request->title;
            $activitie->description = $request->description;
            $activitie->save();
            return back();
        }

        return back()->withErrors(['Je bent niet gemachtig om nieuwe evenst toetevoegen.']);
    }

    public function destroyKalender(Activitie $event)
    {
        $event->delete();
        return back();
    }
}