<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Resultats_aprenentatge;

class Criteris_avaluacions extends Model
{
    use HasFactory;
    protected $table = 'criteris_avaluacio';
    //protected $primaryKey = 'id';
    //public $incrementing = true;
    public $timestamps = false;


    public function rubriquess()
    {
        return $this->hasMany(Rubriques::class, 'criteris_avaluacio_id');
    }

    public function usuaris()
    {
        return $this->belongsToMany(Usuari::class, 'alumnes_has_criteris_avaluacio', 'criteris_avaluacio_id', 'usuaris_id');
    }

    public function resultats_aprenentatges()
    {
        return $this->belongsTo(Resultats_aprenentatge::class, 'resultats_aprenentatge_id');
    } 

}
