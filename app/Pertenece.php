<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertenece extends Model
{
    protected $fillable = [
        'user_id','curso_id'
    ];
    public function listacursos()
    {
        return $this->belongstoMany(User::class, 'user','user_id','curso_id');
    }
    
}
