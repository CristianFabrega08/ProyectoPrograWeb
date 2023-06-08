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
        $profesor = new profesor();
        $profesor->rut = $request->rut;
        $profesor->nombre = $request->nombre;
        $profesor->apellido = $request->apellido;
        $profesor->save();
        return redirect()->route('Administrador.Inicio');
    }

    public function edit(Profesor $profesor){
        $Profesores = profesor::all();
        return view('Administrador.EditProfesor',compact('profesor'));
    }

    public function update(Profesor $profesor, Request $request){
        $profesor->nombre = $request->nombre;
        $profesor->apellido = $request->apellido;
        $profesor->save();
        return redirect()->route('Administrador.Inicio');
    }
}
