<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\profesor;
use Illuminate\Support\Facades\Storage;

class ProfesorController extends Controller
{
    public function Profesor(){
        $Profesores = profesor::all();
        return view('Profesor.Inicio',compact('Profesores'));
    }
    public function store(Request $request){
        $Profesor = new profesor();
        $Profesor->rut = $request->rut;
        $Profesor->nombre = $request->nombre;
        $Profesor->apellido = $request->apellido;
        $Profesor->save();
        return redirect()->route('Administrador.Inicio');
    }

    public function edit(Profesor $profesor){
        $Profesores = profesor::all();
        return view('Administrador.EditProfesor',compact('profesor'));
    }
}
