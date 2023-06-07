<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\estudiante;
use App\Models\propuestas;
use Illuminate\Support\Facades\Storage;


class EstudianteController extends Controller
{
    public function Estudiante(){
        $Estudiantes = estudiante::all();
        $Propuestas = propuestas::all();
        return view('Estudiante.inicio',compact('Estudiantes','Propuestas'));
    }
    public function store(Request $request){
        $estudiante = new estudiante();
        $estudiante->rut = $request->rut;
        $estudiante->nombre = $request->nombre;
        $estudiante->apellido = $request->apellido;
        $estudiante->email = $request ->email;
        $estudiante->save();
        $propuesta = new propuestas();
        $propuesta->estudiante_rut = $request->rut;
        $propuesta->documento = $request->documento->store('public/documentos');
        $propuesta->save();
        return redirect()->route('Estudiante.inicio');
    }
}
