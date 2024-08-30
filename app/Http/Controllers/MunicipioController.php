<?php

namespace App\Http\Controllers;

use App\Models\Municipio;
use App\Models\Estado;
use Illuminate\Http\Request;

class MunicipioController extends Controller
{
    public function index()
    {
        $municipios = Municipio::with('estado')->orderBy('nome', 'asc')->get();
        return view('municipios.index', compact('municipios'));
    }

    public function create()
    {
        $estados = Estado::all();
        return view('municipios.create', compact('estados'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:30',
            'estado_id' => 'required|integer',
        ]);

        Municipio::create($request->all());

        return redirect()->route('municipios.index');
    }

    public function destroy(Municipio $municipio)
    {
        $municipio->delete();
        return redirect()->route('municipios.index');
    }
}
