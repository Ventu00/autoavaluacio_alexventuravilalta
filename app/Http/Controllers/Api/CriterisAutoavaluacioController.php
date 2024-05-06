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
