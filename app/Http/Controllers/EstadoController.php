<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    public function index()
    {
        $estados = Estado::orderBy('nome', 'asc')->get();
        return view('estados.index', compact('estados'));
    }

    public function create()
    {
        return view('estados.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:30',
            'sigla' => 'required|max:2',
        ]);

        Estado::create($request->all());

        return redirect()->route('estados.index');
    }

    public function destroy(Estado $estado)
    {
        $estado->delete();
        return redirect()->route('estados.index');
    }
}

