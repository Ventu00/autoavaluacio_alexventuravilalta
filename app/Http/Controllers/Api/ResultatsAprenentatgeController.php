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
        $modul = Modul::findOrFail($modulId);
    
        $resultats = $modul->resultatsaprenentatges()->get();
    
        return ResultatsResource::collection($resultats);
    }
    
    public function obtenerCriterisAvaluacio($resultatAprendizajeId)
    {
        $resultatAprendizaje = Resultats_aprenentatge::find($resultatAprendizajeId);

        if (!$resultatAprendizaje) {
            return response()->json(['message' => 'Resultado de aprendizaje no encontrado.'], 404);
        }

        
        $criterisAvaluacio = $resultatAprendizaje->obtenerCritersiAvaluacioDetallados();

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
