<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Criteris_avaluacions;
use App\Models\Modul;

class Resultats_aprenentatge extends Model
{
    use HasFactory;
    protected $table = 'resultats_aprenentatge';
    //protected $primaryKey = 'id';
    //public $incrementing = true;
    public $timestamps = false;



    public function criteris_avaluacions()
    {
        return $this->hasMany(Criteris_avaluacions::class, 'resultats_aprenentatge_id');
    }

    public function modul()
    {
        return $this->belongsTo(Modul::class, 'moduls_id');
    }
    
    

}
