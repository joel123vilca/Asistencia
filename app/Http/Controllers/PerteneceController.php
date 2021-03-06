<?php

namespace App\Http\Controllers;

use App\Pertenece;
use Illuminate\Http\Request;
use App\User;
use App\Curso;

class PerteneceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($nombre)
    {
        $user = $this->findByUsername($nombre);
        $cursos = $this->findByCursoId($user); 
        var_dump($cursos);
        return view('alumno.alumno',[
            'user' => $user,
            'cursos'=> $cursos_id->cursos,
        ]);
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pertenece  $pertenece
     * @return \Illuminate\Http\Response
     */
    public function show(Pertenece $pertenece)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pertenece  $pertenece
     * @return \Illuminate\Http\Response
     */
    public function edit(Pertenece $pertenece)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pertenece  $pertenece
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pertenece $pertenece)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pertenece  $pertenece
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pertenece $pertenece)
    {
        //
    }
}
