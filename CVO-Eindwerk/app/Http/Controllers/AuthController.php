<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // *** Login ***
    public function login()
    {
        return view('auth.login');
    }

    public function handleLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended(route('profiel'));
        }

        return back()->withErrors(['Inlog gegevens zijn onbekend']);
    }

    // *** Aanmelden ***
    public function aanmelden()
    {
        return view('auth.aanmelden');
    }

    public function handleAanmelden(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'firstName' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|numeric',
            'password' => 'required|confirmed',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->firstName = $request->firstName;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('login');
    }

    // *** Logout ***
    public function logout()
    {
        Auth::logout();
        return back();
    }
}