<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuaris extends Model
{
    use HasFactory;
    protected $table = 'usuaris';
    //protected $primaryKey = 'id';
    //public $incrementing = true;
    public $timestamps = false;

    public function  moduls()
    {
        return $this->belongsToMany(Usuari::class, 'usuaris_has_moduls', 'usuaris_id', 'moduls_id');
    }
}
