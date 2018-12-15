<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    protected $fillable = [
        'user_id','clase_id','justificacion_id','curso_id','asiste'
    ];

}
