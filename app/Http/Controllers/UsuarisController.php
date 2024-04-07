<?php

namespace App\Http\Controllers;

use App\Models\Usuari;
use App\Clases\Utilitat;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use App\Http\Controllers\UsuarisController;

@include('partials.mensajes');

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
            $usuarios->contrasenya = bcrypt($request->input('contrasenya')); // Aquí encriptamos la contraseña
            $usuarios->correu= $request->input('correu');
            $usuarios->nom= $request->input('nom');
            $usuarios->cognom= $request->input('cognom');
            $usuarios->actiu = $request->input('activo');
            $usuarios->tipus_usuaris_id= $request->input('tipus_usuaris_id');
    
            $usuarios->actiu = ($request->input('activo') == 'activo');

            try{
                $usuarios->save();
                return redirect()->action([UsuarisController::class, 'index']);

            }catch(QueryException $ex){
                $mensaje = Utilitat::errorMessafe($ex);
                $request->session()->flash('error', $mensaje);
                $response = redirect()->action([UsuarisController::class, 'create'])->withInput();
            };



            return redirect()->action([UsuarisController::class, 'index']);

        } catch (Exception $e) {
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
        $usuario = Usuari::findOrFail($usuari);
        
        // Actualizar los campos con los nuevos valores del formulario
        $usuario->nom_usuari = $request->input('nom_usuari');
        $usuario->correu = $request->input('correu');
        $usuario->nom = $request->input('nom');
        $usuario->cognom = $request->input('cognom');
        $usuario->actiu = $request->input('activo');
        $usuario->tipus_usuaris_id = $request->input('tipus_usuaris_id');

        // Verificar si se proporcionó una nueva contraseña
        $nuevaContrasenya = $request->input('contrasenya');
        if ($nuevaContrasenya) {
            $usuario->contrasenya = bcrypt($nuevaContrasenya);
        }

        $usuario->save();
        
        return redirect()->action([UsuarisController::class, 'index']);

    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

    
    

        
    public function destroy(Request $request, $usuari)
    {
        $usuario = Usuari::findOrFail($usuari);

        try {
    
            $usuario->delete();
            $request->session()->flash('mensaje', 'El usuario ha sido eliminado correctamente.');
        } catch (QueryException $ex) {
            $mensaje = Utilitat::errorMessage($ex);
            $request->session()->flash('error', $mensaje);
        }
    
        return redirect()->action([UsuarisController::class, 'index']);
    }
    
    
    
}
