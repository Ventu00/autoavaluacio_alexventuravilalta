<?php

namespace App\Http\Controllers\Api;

use App\Models\Modul;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ModulResource;

class ModulsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $moduls = Modul::all();
        return ModulResource::collection($moduls);    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


     public function matricular(Request $request, $modulId)
     {
         $request->validate([
             'usuari_id' => 'required|exists:usuaris,id',
         ]);
 
         $modul = Modul::findOrFail($modulId);
         $usuariId = $request->input('usuari_id');
 
         if ($modul->usuaris->contains($usuariId)) {
             return response()->json(['message' => 'El usuario ya está matriculado en este módulo.'], 400);
         }
 
         // attach adjunta al usuario en el módulo
         $modul->usuaris()->attach($usuariId);
 
         return response()->json(['message' => 'Usuario matriculado en el módulo exitosamente.']);
     }

     public function desmatricular(Request $request, $modulId)
     {
         $request->validate([
             'usuari_id' => 'required|exists:usuaris,id',
         ]);
 
         $modul = Modul::findOrFail($modulId);
         $usuariId = $request->input('usuari_id');
 
         if (!$modul->usuaris->contains($usuariId)) {
             return response()->json(['message' => 'El usuario no está matriculado en este módulo.'], 400);
         }
 
         // detach elimina al usuario del módulo
         $modul->usuaris()->detach($usuariId);
 
         return response()->json(['message' => 'Usuario desmatriculado del módulo exitosamente.']);
     }



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
