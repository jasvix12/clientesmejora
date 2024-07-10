<?php

namespace App\Http\Controllers;

use App\Models\proyectos;
use Illuminate\Http\Request;

class ProyectosController extends Controller
{
    public function index()
    {
        $proyectos = Proyectos::all();
        return view('proyectos.index', compact('proyectos'));
    }

    public function create()
    {
        return view('proyectos.create');
    }

    public function store(Request $request)
    {
        proyectos::create($request->all());
        return redirect()->route('proyectos.index');
    }

    public function show(Proyectos $proyecto)
    {
        return view('proyectos.show', compact('proyecto'));
    }

    public function edit(Proyectos $proyecto)
    {
        return view('proyectos.edit', compact('proyecto'));
    }

    public function update(Request $request, Proyectos $proyecto)
    {
        $proyecto->update($request->all());
        return redirect()->route('proyectos.index');
    }

    public function destroy(Proyectos $proyecto)
    {
        $proyecto->delete();
        return redirect()->route('proyectos.index');
    }
}
