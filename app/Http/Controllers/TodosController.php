<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
        ]);
        $todo = new Todo();
        $todo->title = $request->title;
        $todo->save();
        return redirect()
            ->route('todos')
            ->with('success', 'Tarea creada correctamente');
    }
}