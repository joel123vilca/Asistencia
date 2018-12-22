<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    protected $fillable = [
        'tema','curso_id'
    ];
    
    public function  alumnos()
    {
        return $this->belongstoMany('App\User','user','id','nombre');
    }
}
