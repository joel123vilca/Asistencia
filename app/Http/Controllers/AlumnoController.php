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
        $asistencias = Asistencia::join('user','user.id','=',$id)
        ->join('curso','curso.id','=',$curso)
        ->join('clase','clase.id','=','curso.id')
        ->select('clase.tema','clase.create_at','asistencia.asiste')
        ->getQuery()
        ->get(); 
        return view('alumno.asistencias', [
            'clases' => $clases,
            'asistencias'=>$asistencias,
        ]);
    }
}
