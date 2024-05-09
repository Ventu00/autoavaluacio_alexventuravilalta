<?php

namespace App\Http\Controllers\Api;

use App\Models\Usuari;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Criteris_avaluacions;
use App\Http\Resources\CriterisResource;

class CriterisAutoavaluacioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $criteris = Criteris_avaluacions::all();
        return CriterisResource::collection($criteris);
    }

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


    public function actualizarNota(Request $request, $usuaris_id, $criteris)
    {
        $nota = $request->input('nota');
        $usuari = Usuari::findOrFail($usuaris_id);

        // Verificar si el usuario tiene asociado este criterio de evaluación
        if ($usuari->criteris_avaluacio->contains($criteris)) {
            // Actualizar la nota del usuario para este criterio
            $usuari->criteris_avaluacio()->updateExistingPivot($criteris, ['nota' => $nota]);
            return response()->json(['message' => 'Nota actualizada exitosamente.']);
        } else {
            return response()->json(['error' => 'El usuario no tiene asociado este criterio de evaluación.'], 404);
        }
    }

    public function notasUsuariosPorCriterio($criterioId, $usuarioId)
    {
        try {
            // Verificar si el criterio de evaluación existe
            $criterio = Criteris_avaluacions::findOrFail($criterioId);
    
            // Verificar si el usuario existe
            $usuario = Usuari::findOrFail($usuarioId);
    
            // Obtener la nota del usuario para el criterio de evaluación específico
            $nota = $usuario->criteris_avaluacio()
                ->where('criteris_avaluacio_id', $criterioId)
                ->pluck('nota')
                ->first();
    
            // Retornar la nota del usuario para el criterio de evaluación específico
            return response()->json(['nota' => $nota], 200);
        } catch (\Exception $e) {
            // Manejo de errores
            return response()->json(['message' => 'Error al recuperar la nota del usuario para el criterio de evaluación.'], 500);
        }
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
