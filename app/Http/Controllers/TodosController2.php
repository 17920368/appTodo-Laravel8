<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodosController2 extends Controller
{
    public function index()
    {
        $todos = Todo::all();
        return view('Todo.index', ['todos' => $todos]);
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
        ]);
        $todo = new Todo();
        $todo->title = $request->title;
        $todo->save();
        return redirect()
            ->route('todos.index')
            ->with('success', 'Tarea creada correctamente');
    }
    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $todo = Todo::find($id);
        return view('Todo.show', ['todo' => $todo]);
    }

    public function update(Request $request, $id)
    {
        $todo = Todo::find($id);
        $todo->title = $request->title;
        $todo->save;
        return redirect()
            ->route('todos.index')
            ->with('success', 'Tarea actualizada correctamente');
    }

    public function destroy($id)
    {
        // $todo = Todo::destroy($id);
        $todo = Todo::find($id);
        $todo->delete();
        return redirect()
            ->route('todos.index')
            ->with('success', 'Tarea eliminada correctamente');
    }
}