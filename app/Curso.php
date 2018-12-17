<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Curso extends Model
{
    protected $fillable = [
        'nombre','turno','ciclo'
    ];
 
}
