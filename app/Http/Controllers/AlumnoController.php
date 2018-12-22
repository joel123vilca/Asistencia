<?php

namespace App\Http\Controllers;
use App\User;
use App\Curso;
use Illuminate\Http\Request;
use Auth;
use App\Asistencia;

use Illuminate\Support\Facades\DB;
class AlumnoController extends Controller
{
    public function index()
    {
        return view('alumno.alumno');
    }
    public function listaCursos()
    {
        $id=Auth::id();
        $user = $this->findByUsername($id);
        return view('alumno.alumno',[
            'user' => $user,
            'cursos'=>$user->cursos,
        ]);

    }

    private Function findByUsername($id)
    {
        return User::where('id','=',$id)->first();
    }

    Public function asistencias($user, $curso)
    {
        $id = Auth::id();
        $clases = User::find($id)->clases;
        return view('alumno.asistencias', [
            'clases' => $clases,
        ]);
    }
}
