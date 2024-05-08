<?php

namespace App\Http\Controllers\Api;

use App\Models\Rubriques;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\RubriquesResource;
use App\Http\Controllers\Api\RubriquesController;

class RubriquesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rubriques = Rubriques::all();
        return RubriquesResource::collection($rubriques); 
    }

    public function getRubricasByModulo($moduloId)
    {
        // Obtener las rúbricas asociadas al módulo seleccionado
        $rubricas = Rubriques::where('modulo_id', $moduloId)->get();
    
        return response()->json($rubricas, 200);
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
