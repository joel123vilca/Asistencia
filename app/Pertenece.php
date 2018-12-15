<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertenece extends Model
{
    protected $fillable = [
        'user_id','curso_id'
    ];

}
