<?php

namespace App\Http\Controllers\Api;

use App\Models\Usuari;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\UsuariResource;
use App\Models\Modul;

class UsuarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuari = Usuari::all();
        return UsuariResource::collection($usuari); 
    }



    public function modulosMatriculados($usuarioId)
    {
        // Buscar al usuario por su ID
        $usuario = Usuari::findOrFail($usuarioId);

        // Obtener los módulos matriculados del usuario
        $modulosMatriculados = $usuario->moduls;

        // Retornar la respuesta, por ejemplo, como JSON
        return response()->json($modulosMatriculados);
    }





    // public function usuarisModuls($id)
    // {
    //     $usuari = Usuari::findOrFail($id);
    //     $moduls = $usuari->modules()->get(); // Assuming you have a relationship defined in your Usuari model

    //     return response()->json($moduls);
    // }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }







    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
