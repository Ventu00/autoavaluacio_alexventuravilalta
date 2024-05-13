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
        $usuario = Usuari::findOrFail($usuarioId);

        // módulos  del usuario
        $modulosMatriculados = $usuario->moduls;

        
        return response()->json($modulosMatriculados);
    }






    public function mostrarDatosUsuario($nombreUsuario)
{
    $usuario = Usuari::where('nom', $nombreUsuario)->first();

    if (!$usuario) {
        return response()->json(['error' => 'Usuario no encontrado'], 404);
    }

    // módulos de usuario
    $modulos = $usuario->moduls;

    $datosUsuario = [];

    // Iterar modulos y obtenr resultados
    foreach ($modulos as $modulo) {
        $datosModulo = [
            'modulo' => $modulo,
            'resultados_aprendizaje' => [],
        ];

        // Obtener los resultados del módulo
        $resultadosAprendizaje = $modulo->resultatsaprenentatges;

        // Iterar sobre los resultados y obtener criterios
        foreach ($resultadosAprendizaje as $resultado) {
            $datosResultado = [
                'resultado_aprendizaje' => $resultado,
                'criterios' => $resultado->obtenerCritersiAvaluacioDetallados(),
            ];

            // Agregar las notas de los criterios para el usuario
            $criteriosConNota = [];
            foreach ($datosResultado['criterios'] as $criterio) {
                $nota = $usuario->criteris_avaluacio()
                    ->where('criteris_avaluacio_id', $criterio['id'])
                    ->pluck('nota')
                    ->first();

                $criterio['nota'] = $nota; //añado a criterio la nota del usuario en ese criteiro
                $criteriosConNota[] = $criterio;//aqui meto todos los criterios conla nota
            }

            $datosResultado['criterios'] = $criteriosConNota;

            $datosModulo['resultados_aprendizaje'][] = $datosResultado;
        }

        $datosUsuario[] = $datosModulo;
    }

    return response()->json($datosUsuario);
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
