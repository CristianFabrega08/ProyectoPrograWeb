<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profesor;

class HomeController extends Controller
{
    public function index(){
        return view('home.Inicio');
    }
    #redireccionar a vista de usuario


    public function Profesor(){
        $Profesores = profesor::all();
        return view('Profesor.Inicio',compact('Profesores'));
    }

    public function Administrador(){
        return view('Administrador.Inicio');
    }
}

