<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class TodoController extends Controller
{
    public function index() {
        $todos = Auth::user()->todos()->uncompleted()->get();
        $completedTodos = Auth::user()->todos()->completed()->get();

        return view('todos.index', [
            'todos' => $todos,
            'completedTodos' => $completedTodos
        ]);
    }

    public function store(Request $request) {
        $request->validate([
            'content' => 'required'
        ]);

        $todo = new Todo();
        $todo->content = $request->content;
        $todo->user_id = Auth::id();
        $todo->save();

        return redirect()->back();
    }

    public function toggle(Todo $todo) {
        if (!Gate::allows('update-todo', $todo)) {
            abort(403);
        }
        $todo->completed = !$todo->completed;
        $todo->save();

        return redirect()->back();
    }

    public function destroy(Todo $todo) {
        if (!Gate::allows('update-todo', $todo)) {
            abort(403);
        }
        $todo->delete();
        return redirect()->back();
    }
}