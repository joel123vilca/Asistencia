<?php

namespace App\Http\Controllers;
use App\User;
use App\Curso;
use Illuminate\Http\Request;
use Auth;

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
        $cursos= DB::table('users')
            ->join('pertenece', 'users.id', '=', 'pertenece.user_id')
            ->join('cursos', 'cursos.id', '=', 'pertenece.curso_id')
            ->select('cursos.*')
            ->where('users.id', '=',$id)
            ->get();
        
        return view('alumno.alumno', compact('cursos'));
    }
    Public function asistencias($user, $curso)
    {
        $id=Auth::id();
        $clases= DB::table('clases')->where('curso_id', '=',$curso)
            ->get();

            

        return view('alumno.asistencias', compact('clases'));
    }
}
