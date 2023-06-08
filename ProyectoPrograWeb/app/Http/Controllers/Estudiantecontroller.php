<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\estudiante;
use App\Models\propuestas;
use App\Models\PropuestaProfesor;
use App\models\profesor;
use Illuminate\Support\Facades\Storage;


class EstudianteController extends Controller
{
    public function Estudiante(){
        $Estudiantes = estudiante::all();
        $Propuestas = propuestas::all();
        $PropuestaProfesor = PropuestaProfesor::all();
        $profesores = profesor::all();
        return view('Estudiante.inicio',compact('Estudiantes','Propuestas','PropuestaProfesor','profesores'));
    }


    
    public function store(Request $request){
        $propuesta = new propuestas();
        $propuesta->estudiante_rut = $request->estudiante_rut;
        $propuesta->documento = $request->documento->store('public/documentos');   
        $propuesta->Fecha = $request->Fecha;
        $propuesta->save();
        $propuestaprofe = new PropuestaProfesor();
        $propuestaprofe->propuesta_id = $propuesta->id;
        $propuestaprofe->profesor_rut = $request->profesor_rut;
        $propuestaprofe->fecha = $propuesta->Fecha;
        $propuestaprofe->comentario = (' ');
        $propuestaprofe->save();
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
