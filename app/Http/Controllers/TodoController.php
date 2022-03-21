<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();

        return view('index', compact('todos'));
    }

    public function store(Request $request)
    {
        $todo = new Todo;
        $todo->text = $request->text;
        $todo->save();

        return redirect()->route('index');
    }
}
