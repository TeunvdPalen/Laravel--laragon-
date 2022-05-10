<?php

namespace App\Http\Controllers;

use App\Models\Hond;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfielController extends Controller
{
    public function profiel()
    {
        $user = Auth::user();
        $honds = Hond::where('user_id', $user->id)->get();
        return view('profiel.index',  [
            'user' => $user,
            'honds' => $honds,
        ]);
    }

    // *** Hond toevogen of wijzigen ***
    public function hond()
    {
        $user = Auth::user();
        return view('profiel.hond',  [
            'user' => $user,
        ]);
    }

    public function handleHond(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'name' => 'required',
            'breed' => 'required',
            'sex' => 'required',
            'birth' => 'required',
        ]);

        $hond = new Hond();
        $hond->user_id = $user->id;
        $hond->name = $request->name;
        $hond->breed = $request->breed;
        $hond->sex = $request->sex;
        $hond->birth = $request->birth;
        $hond->save();

        return redirect()->route('profiel');
    }

    public function editHond(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'breed' => 'required',
            'sex' => 'required',
            'birth' => 'required',
        ]);

        $hond = new Hond();
        $hond->name = $request->name;
        $hond->breed = $request->breed;
        $hond->sex = $request->sex;
        $hond->birth = $request->birth;
        $hond->save();

        return redirect()->route('profiel');
    }

    // *** Edit gegevens ***
    public function edit()
    {
        $user = Auth::user();
        return view('profiel.edit',  [
            'user' => $user,
        ]);
    }

    public function editEmail(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'email' => [
                'required',
                'email',
                Rule::unique('users')->ignore($user->id)
            ]
        ]);

        $user->email = $request->email;
        $user->save();

        return redirect()->route('profiel');
    }

    public function editPhone(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'phone' => 'required|numeric'
        ]);

        $user->phone = $request->phone;
        $user->save();

        return redirect()->route('profiel');
    }

    public function editPassword(Request $request)
    {
        $user = Auth::user();
        $request->validate([
            'password' => 'required|confirmed'
        ]);

        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('profiel');
    }
}