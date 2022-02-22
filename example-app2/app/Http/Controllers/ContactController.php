<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMessageSent;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact() {
        return view('contact/contact');
    }

    public function verzenden(Request $request) {
        
        $request->validate([
            'naam' => 'required',
            'email' => 'required|email',
            'bericht' => 'required'
        ]);

        Mail::to('test@mail.com')->send(new ContactMessageSent($request->only(['naam', 'email', 'bericht'])));

        // voor te testen zonder een mail te sturen
        Route::get('/contact-test', function() {
            return view(new ContactMessageSent($request->only(['naam', 'email', 'bericht'])));
        });

        return back()->with('status', 'Je bericht is verstuurd');
    }
}