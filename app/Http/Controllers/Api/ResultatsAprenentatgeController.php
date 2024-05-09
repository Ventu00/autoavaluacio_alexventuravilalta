<?php

namespace App\Http\Controllers\Api;
use App\Models\Modul;
use App\Models\Resultats_aprenentatge;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ResultatsResource;


class ResultatsAprenentatgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultats = Resultats_aprenentatge::all();
        return ResultatsResource::collection($resultats);
    }



    public function getResultatsByModul($modulId)
    {
        // Busca el módulo
        $modul = Modul::findOrFail($modulId);
    
        // Obtiene los resultados de aprendizaje asociados al módulo
        $resultats = $modul->resultatsaprenentatges()->get();
    
        // Retorna la colección de resultados de aprendizaje
        return ResultatsResource::collection($resultats);
    }
    
    public function obtenerCriterisAvaluacio($resultatAprendizajeId)
    {
        // Buscar el resultado de aprendizaje por su ID
        $resultatAprendizaje = Resultats_aprenentatge::find($resultatAprendizajeId);

        // Verificar si se encontró el resultado de aprendizaje
        if (!$resultatAprendizaje) {
            return response()->json(['message' => 'Resultado de aprendizaje no encontrado.'], 404);
        }

        // Obtener los criterios de evaluación detallados
        $criterisAvaluacio = $resultatAprendizaje->obtenerCritersiAvaluacioDetallados();

        // Retornar los criterios de evaluación detallados
        return response()->json(['criterisAvaluacio' => $criterisAvaluacio], 200);
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
