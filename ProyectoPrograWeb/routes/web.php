<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EstudianteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home.Inicio');
});

Route::get('/Estudiante', [EstudianteController::class, 'Estudiante'])->name('Estudiante.inicio');
Route::post('/Estudiante',[EstudianteController::class,'store'])->name('Estudiante.store');
Route::get('/Profesor', [HomeController::class, 'Profesor'])->name('Profesor.Inicio');
Route::get('/Administrador', [HomeController::class, 'Administrador'])->name('Administrador.Inicio');


