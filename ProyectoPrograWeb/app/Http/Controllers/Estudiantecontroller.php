<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\estudiante;
use App\Models\propuestas;
use App\Models\PropuestaProfesor;
use Illuminate\Support\Facades\Storage;


class EstudianteController extends Controller
{
    public function Estudiante(){
        $Estudiantes = estudiante::all();
        $Propuestas = propuestas::all();
        $PropuestaProfesor = PropuestaProfesor::all();
        return view('Estudiante.inicio',compact('Estudiantes','Propuestas','PropuestaProfesor'));
    }


    
    public function store(Request $request){
        $propuesta = new propuestas();
        $propuesta->estudiante_rut = $request->estudiante_rut;
        $propuesta->documento = $request->documento->store('public/documentos');   
        $propuesta->save();
        return redirect()->route('Estudiante.inicio');
    }

    public function edit(Estudiante $estudiante){
        $Estudiantes= estudiante::all();
        return view('Administrador.EditAlumno',compact('estudiante'));
    }

    public function update(Estudiante $estudiante, Request $request){
        $estudiante->nombre = $request->nombre;
        $estudiante->apellido = $request->apellido;
        $estudiante->email = $request->email;
        
        $estudiante->save();
        return redirect()->route('Administrador.Inicio');
    }
}
