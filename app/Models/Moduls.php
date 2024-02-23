<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moduls extends Model
{
    use HasFactory;
    protected $table = 'moduls';
    //protected $primaryKey = 'id';
    //public $incrementing = true;
    public $timestamps = false;


    public function cicle()
    {
        return $this->hasMany(Cicle::class, 'cicles_id');
    }


    public function usuaris()
    {
        return $this->belongsToMany(usuaris::class, 'usuaris_has_moduls', 'moduls_id', 'usuaris_id');
    }


}
 