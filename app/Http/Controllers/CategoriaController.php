<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        return view('Categoria.index', ['categorias' => $categorias]);
    }

    public function create()
    {
        return view('Categoria.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'color' => 'required',
        ]);
        $categoria = new Categoria();
        $categoria->name = $request->name;
        $categoria->color = $request->color;
        $categoria->save();
        return redirect()
            ->route('categoria.create')
            ->with('success', 'Se creo correctamente');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $categoria = Categoria::find($id);
        return view('Categoria.show', ['categoria' => $categoria]);
    }
    public function update(Request $request, $id)
    {
        $categoria = Categoria::find($id);
        $categoria->name = $request->name;
        $categoria->color = $request->color;
        $categoria->save();
        return redirect()
            ->route('categoria.index')
            ->with('success', 'Se actualizo correctamente');
    }

    public function destroy($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();
        return redirect()
            ->route('categoria.index')
            ->with('success', 'Se elimno correctamente');
    }
}