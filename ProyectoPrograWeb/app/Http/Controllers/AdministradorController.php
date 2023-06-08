<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\estudiante;
use App\models\profesor;
use App\Models\propuestas;
use Illuminate\Support\Facades\Storage;

class AdministradorController extends Controller
{
    public function Administrador(){
        $Profesores = profesor::all();
        $Estudiantes = estudiante::all();
        $Propuestas = propuestas::all();
        return view('Administrador.Inicio', compact('Estudiantes','Profesores','Propuestas'));
    }


    public function store(Request $request){
        $Estudiante = new estudiante();
        $Estudiante->rut = $request->rut;
        $Estudiante->nombre = $request->nombre;
        $Estudiante->apellido = $request->apellido;
        $Estudiante->email = $request ->email;
        $Estudiante->save();
        return redirect()->route('Administrador.Inicio');
    }
    
    public function update(propuestas $Propuestas, Request $request){
        $Propuestas->estado = $request->estado;
        $Propuestas->save();
        return redirect()->route('Administrador.Inicio');
    }

    public function propuesta(){
        $Propuestas = propuestas::all();
        return view('Administrador.propuesta', compact('Propuestas'));
    }
    
}
