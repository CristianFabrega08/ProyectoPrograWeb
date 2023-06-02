<?php

namespace App\Http\Controllers;

use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;

class Estudiantecontroller extends Controller
{
    public function index(){
        return view('home.Inicio');
    }

    public function Estudiante(){
        return view('Estudiante.inicio');
    }
}

