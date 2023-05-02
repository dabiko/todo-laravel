<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTodoRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;
use App\Models\Todo;




class TodoController extends Controller
{
    public function index(){

        $todos = Todo::all()->sortBy([
            ['created_at', 'desc']
        ]);;
        return view('todo.index', compact('todos'));
    }

    public function create()
    {
        return view('todo.create');
    }

    public function edit()
    {
        return view('todo.edit');
    }

    public function store(StoreTodoRequest $request): RedirectResponse
    {
        // Retrieve the validated input...
        $validated = $request->validated();

        // Retrieve a portion of the validated input...
        $validated = $request->safe()->only(['name', 'title']);

        Todo::create($validated);
        return redirect('/todo/create');
    }


    
    public function delete()
    {
        return view('todo.delete');
    }

}
