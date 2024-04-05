<?php

namespace App\Http\Controllers;

use App\Models\Usuari;
use Illuminate\Http\Request;
use App\Http\Controllers\UsuarisController;

class UsuarisController extends Controller
{
    public function index()
    {
        $usuarios = Usuari::paginate(4)
        ->withQueryString();
        foreach ($usuarios as $usuario) {
            $usuario->activo_checkbox = $usuario->actiu ? 'checked' : '';
        }
        return view('usuaris\index', compact('usuarios'));
    }

    public function create()
    {
        return view('usuaris\create');
    }

    public function store(Request $request)
    {
        try {
            $usuarios = new Usuari();
            $usuarios->nom_usuari = $request->input('nom_usuari');
            $usuarios->contrasenya= $request->input('contrasenya');
            $usuarios->correu= $request->input('correu');
            $usuarios->nom= $request->input('nom');
            $usuarios->cognom= $request->input('cognom');
            $usuarios->actiu = $request->input('activo');
            $usuarios->tipus_usuaris_id= $request->input('tipus_usuaris_id');
    
            $usuarios->actiu = ($request->input('activo') == 'activo');
            $usuarios->save();
            return redirect()->action([UsuarisController::class, 'index']);

        } catch (Exception $e) {
            // Catching the exception and handling it
            echo "Error: " . $e->getMessage();
        }
        
    
    }

    public function edit(Usuaris $usuarios)
    {
    }

    public function update(Request $request, Usuaris $usuarios)
    {

    }
        

    public function destroy(Usuaris $usuarios, Request $request)
    {
        $usuarios->delete();

        return redirect()->action([UsuarisController::class, 'index']);
    }
}
