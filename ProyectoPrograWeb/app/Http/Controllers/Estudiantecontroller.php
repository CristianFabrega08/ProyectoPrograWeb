<?php

namespace App\Http\Controllers;

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;

class Estudiantecontroller extends Controller
{
    public function index(){
        return view('home.Inicio');
    }
    #redireccionar a vista de usuario
    public function Estudiante(){
        return view('Estudiante.inicio');
    }
    public function Profesor(){
        return view('Profesor.Inicio');
    }
    public function Administrador(){
        return view('Administrador.Inicio');
    }
}

