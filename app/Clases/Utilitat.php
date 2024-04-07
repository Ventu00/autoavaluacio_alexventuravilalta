<?php

namespace App\Clases;

use Illuminate\Database\QueryException;

class Utilitat
{
    public static function errorMessage(QueryException $ex)
    {
        return $ex->getMessage();
    }
}
