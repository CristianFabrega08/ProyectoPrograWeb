<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\propuestas;
use Illuminate\Support\Facades\Storage;
use App\Models\estudiante;

class PropuestasController extends Controller
{
    public function update(propuestas $Propuestas, Request $request){
        $Propuestas->estudiante_rut = $Propuestas->estudiante_rut;
        $Propuestas->documento = $Propuestas->documento;
        $Propuestas->Fecha = $Propuestas->Fecha;
        $Propuestas->estado = $request->estado;
        $Propuestas->id = $Propuestas->id;
        $Propuestas->save();
        return redirect()->route('Administrador.propuesta');
    }
}
