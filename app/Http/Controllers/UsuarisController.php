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

    public function edit($id)
    {
        // Buscar el usuario por su ID
        $usuario = Usuari::findOrFail($id);
        
        // Pasar el usuario a la vista
        return view('usuaris.edit', ['usuario' => $usuario]);
    }
    
    public function update(Request $request, $usuari)
    {
        try {
            // Buscar el usuario por su ID
            $usuario = Usuari::findOrFail($usuari);
            
            // Actualizar los campos con los nuevos valores del formulario
            $usuario->nom_usuari = $request->input('nom_usuari');
            $usuario->contrasenya = $request->input('contrasenya');
            $usuario->correu = $request->input('correu');
            $usuario->nom = $request->input('nom');
            $usuario->cognom = $request->input('cognom');
            $usuario->actiu = $request->input('activo');
            $usuario->tipus_usuaris_id = $request->input('tipus_usuaris_id');
    
            // Actualizar el estado activo
            $usuario->actiu = ($request->input('activo') == 'activo');
    
            // Guardar los cambios en la base de datos
            $usuario->save();
            
            // Redirigir a la página de índice de usuarios
            return redirect()->action([UsuarisController::class, 'index']);
    
        } catch (Exception $e) {
            // Capturar la excepción y manejarla
            echo "Error: " . $e->getMessage();
        }
    }
    
    

        

    public function destroy(Request $request, $usuari)
    {
        $usuario = Usuari::findOrFail($usuari);
        $usuario->delete();
        return redirect()->action([UsuarisController::class, 'index']);
    }
    
    
}
