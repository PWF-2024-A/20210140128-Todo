<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        $todos = Todo::where('user_id', auth()->user()->id)

            ->orderBy('is_complete', 'asc')

            ->orderBy('created_at', 'desc')

            ->get();

        $todosCompleted = Todo::where('user_id', auth()->user()->id)
            ->where('is_complete', true)
            ->count();

        return view('todo.index', compact('todos', 'todosCompleted'));
    }

    public function create(){
        return view('todo.create');
    }

    public function edit(){
        return view('todo.edit');
    }

}
