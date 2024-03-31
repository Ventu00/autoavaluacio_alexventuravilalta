<?php

namespace App\Http\Controllers;

use App\Models\Usuari;
use Illuminate\Http\Request;

class UsuarisController extends Controller
{
    public function index()
    {
        $usuarios = Usuari::all();
        return view('usuaris\index', compact('usuarios'));
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom_usuari' => 'required',
            'contrasenya' => 'required',
            'correu' => 'required|email',
            'nom' => 'required',
            'cognom' => 'required',
            'actiu' => 'required',
            'tipus_usuaris_id' => 'required'
        ]);

        Usuaris::create($request->all());

        return redirect()->route('usuarios.index')->with('success', 'Usuario creado correctamente');
    }

    public function edit(Usuaris $usuaris)
    {
        return view('usuarios.edit', compact('usuaris'));
    }

    public function update(Request $request, Usuaris $usuaris)
    {
        $request->validate([
            'nom_usuari' => 'required',
            'contrasenya' => 'required',
            'correu' => 'required|email',
            'nom' => 'required',
            'cognom' => 'required',
            'actiu' => 'required',
            'tipus_usuaris_id' => 'required'
        ]);

        $usuaris->update($request->all());

        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado correctamente');
    }

    public function destroy(Usuaris $usuaris)
    {
        $usuaris->delete();

        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado correctamente');
    }
}
