<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuari extends Model
{
    use HasFactory;
    protected $table = 'usuaris';
    //protected $primaryKey = 'id';
    //public $incrementing = true;
    public $timestamps = false;

    public function moduls()
    {
        return $this->belongsToMany(Modul::class, 'usuaris_has_moduls', 'usuaris_id', 'moduls_id');
    }

    public function criteris_avaluacio()
    {
        return $this->belongsToMany(Criteris_avaluacions::class, 'alumnes_has_criteris_avaluacio', 'usuaris_id', 'criteris_avaluacio_id');
    }



    public function tipus_usuaris()
    {
        return $this->hasMany(Tipus_usuaris::class, 'tipus_usuaris_id');
    }
}
