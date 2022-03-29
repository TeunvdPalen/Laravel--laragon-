<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function profile() {
        $posts = Post::where('user_id', Auth::id())->paginate(9);
        $user = User::first();
        return view('users.profile', [
            'posts' => $posts,
            'user' => $user,
        ]);
    }

    public function show(User $user) {
        $posts = Post::where('user_id', $user->id)->paginate(9);
        return view('users.show', [
            'posts' => $posts,
            'user' => $user,
        ]);
    }
}