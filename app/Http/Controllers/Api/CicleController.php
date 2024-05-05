<?php

namespace App\Http\Controllers\Api;

use App\Models\Cicle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CicleResource;
use Illuminate\Database\QueryException;


class CicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cicle = Cicle::all();
        return CicleResource::collection($cicle);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $cicle = new Cicle();
            $cicle->sigles = $request->input('sigles');
            $cicle->descripcio= $request->input('descripcio');
            $cicle->actiu= ($request->input('actiu') == 'actiu');
       
    
            $cicle->save();
            $response = (new CicleResource($cicle))
                        ->response()
                        ->setStatusCode(201);
            return $response;

        } catch (QueryException $ex) {

            echo "Error: " . $e->getMessage();

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cicle $cicle)
    {
        $cicle = Cicle::with('moduls')->find($cicle->id);
        return new CicleResource($cicle);
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
