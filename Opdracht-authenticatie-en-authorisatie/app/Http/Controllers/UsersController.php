<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function profile() {
        $posts = Post::paginate(9);
        $user = User::first();
        return view('users.profile', [
            'posts' => $posts,
            'user' => $user,
        ]);
    }

    public function show() {
        $posts = Post::paginate(9);
        $user = User::first();
        return view('users.show', [
            'posts' => $posts,
            'user' => $user,
        ]);
    }
}
