<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cicle extends Model
{
    use HasFactory;
    protected $table = 'cicles';
    //protected $primaryKey = 'id';
    //public $incrementing = true;
    public $timestamps = false;
    
    
    public function moduls()
    {
        return $this->hasMany(Moduls::class, 'cicles_id');
    }

}
