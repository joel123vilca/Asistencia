<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
class AdminController extends Controller
{
    public function index()
    {
        $cursos = Curso::get();
        return view('admin.cursos', compact('cursos'));
    }
}
