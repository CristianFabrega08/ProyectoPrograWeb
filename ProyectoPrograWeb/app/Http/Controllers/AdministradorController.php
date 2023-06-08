<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\estudiante;
use App\models\profesor;
use Illuminate\Support\Facades\Storage;

class AdministradorController extends Controller
{
    public function Administrador(){
        $Profesores = profesor::all();
        $Estudiantes = estudiante::all();
        return view('Administrador.Inicio', compact('Estudiantes','Profesores'));
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


    
}
