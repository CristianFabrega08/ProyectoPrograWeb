<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Estudiantecontroller extends Controller
{
    public function index(){
        return view('home.Inicio');
    }
}
