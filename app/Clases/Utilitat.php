<?php

namespace App\Clases;

use Illuminate\Database\QueryException;

class Utilitat
{
    public static function errorMessage(QueryException $ex)
    {
        // Aquí va tu lógica para obtener el mensaje de error
        return $ex->getMessage();
    }
}
