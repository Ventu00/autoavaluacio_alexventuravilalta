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






    public function mostrarDatosUsuario($nombreUsuario)
{
    // Buscar el usuario por su nombre
    $usuario = Usuari::where('nom', $nombreUsuario)->first();

    if (!$usuario) {
        return response()->json(['error' => 'Usuario no encontrado'], 404);
    }

    // Obtener los módulos en los que está matriculado el usuario
    $modulos = $usuario->moduls;

    // Inicializar un arreglo para almacenar los datos
    $datosUsuario = [];

    // Iterar sobre los módulos del usuario
    foreach ($modulos as $modulo) {
        $datosModulo = [
            'modulo' => $modulo,
            'resultados_aprendizaje' => [],
        ];

        // Obtener los resultados de aprendizaje del módulo
        $resultadosAprendizaje = $modulo->resultatsaprenentatges;

        // Iterar sobre los resultados de aprendizaje
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

                $criterio['nota'] = $nota;
                $criteriosConNota[] = $criterio;
            }

            $datosResultado['criterios'] = $criteriosConNota;

            // Agregar los datos del resultado de aprendizaje al módulo
            $datosModulo['resultados_aprendizaje'][] = $datosResultado;
        }

        // Agregar los datos del módulo al usuario
        $datosUsuario[] = $datosModulo;
    }

    // Retornar los datos del usuario en formato JSON
    return response()->json($datosUsuario);
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
