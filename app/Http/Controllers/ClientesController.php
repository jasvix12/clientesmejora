<?php

namespace App\Http\Controllers;

use App\Models\clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index()
    {
        $clientes = clientes::all();
        return view('clientes.index', compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        Clientes::create($request->all());
        return redirect()->route('clientes.index');
    }

    public function show(clientes $cliente)
    {
        return view('clientes.show', compact('cliente'));
    }

    public function edit(clientes $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    public function update(Request $request, clientes $cliente)
    {
        $cliente->update($request->all());
        return redirect()->route('clientes.index');
    }

    public function destroy(clientes $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index');
    }
}
