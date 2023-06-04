<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index(){
        $estudiantes -> Estudiantes::all();
        return view('Estudiante.inicio',compact('estudiantes'));
    }
}
