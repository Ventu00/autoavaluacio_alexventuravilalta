<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipus_usuari extends Model
{
    use HasFactory;
    protected $table = 'tipus_usuaris';
    //protected $primaryKey = 'id';
    //public $incrementing = true;
    public $timestamps = false;


    public function usuari()
    {
        return $this->hasMany(Usuari::class, 'tipus_usuaris_id');
    }
}
