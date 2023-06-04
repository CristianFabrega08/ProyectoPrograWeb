<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\estudiante;

class HomeController extends Controller
{
    public function index(){
        return view('home.Inicio');
    }
    #redireccionar a vista de usuario
    public function Estudiante(){
        #$Estudiantes = estudiante::all();
        return view('Estudiante.inicio');
    }
    public function Profesor(){
        return view('Profesor.Inicio');
    }
    public function Administrador(){
        return view('Administrador.Inicio');
    }
}

