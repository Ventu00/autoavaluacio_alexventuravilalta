<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Resultats_aprenentatge;

class Modul extends Model
{
    use HasFactory;
    protected $table = 'moduls';
    //protected $primaryKey = 'id';
    //public $incrementing = true;
    public $timestamps = false;


    public function cicle()
    {
        return $this->belongsTo(Cicle::class, 'cicles_id');
    }


    public function usuaris()
    {
        return $this->belongsToMany(Usuari::class, 'usuaris_has_moduls', 'moduls_id', 'usuaris_id');
    }
    
    public function resultatsaprenentatges()
    {
        return $this->hasMany(Resultats_aprenentatge::class, 'moduls_id');
    }
    
}
