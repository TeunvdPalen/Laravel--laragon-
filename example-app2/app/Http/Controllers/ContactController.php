<?php

namespace App\Http\Controllers;

use App\Mail\Review;
use App\Mail\ReviewMessage;
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
        // Route::get('/contact-test', function() {
        //     return view(new ContactMessageSent(['naam', 'email', 'bericht']));
        // });

        return back()->with('status', 'Je bericht is verstuurd');
    }

    public function review() {
        return view('/contact/review');
    }

    public function review_verzenden(Request $request) {
        $request->validate([
            'naam' => 'required',
            'email' => 'required|email',
            'bericht' => 'required|between:50,140',
            'score' => 'required',
            'privacy' => 'accepted'
        ]);

        Mail::to('test@mail.com')->send(new Review($request->only(['naam', 'email', 'bericht', 'score'])));
        Mail::to($request['email'])->send(new ReviewMessage($request->only(['naam', 'bericht', 'score'])));

        return back()->with('status', 'Dankjewel om een review te plaatsen.');
    }
}