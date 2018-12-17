<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = [
        'nombre','turno','ciclo'
    ];
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
