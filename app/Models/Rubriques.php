<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rubriques extends Model
{
    use HasFactory;
    protected $table = 'moduls';
    //protected $primaryKey = 'id';
    //public $incrementing = true;
    public $timestamps = false;


    public function criteris_avaluacions()
    {
        return $this->belongsTo(Criteris_avaluacio_id::class, 'criteris_avaluacio_id');
    }
}
