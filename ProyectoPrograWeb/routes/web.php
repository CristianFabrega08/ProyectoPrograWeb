<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EstudianteController;
use App\Http\Controllers\AdministradorController;
use App\Http\Controllers\ProfesorController;

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
Route::get('/',[Homecontroller::class, 'index'])->name('home.Inicio');
Route::get('/Estudiante', [EstudianteController::class, 'Estudiante'])->name('Estudiante.inicio');
Route::post('/Estudiante',[EstudianteController::class,'store'])->name('Estudiante.store');

Route::get('/Profesor', [ProfesorController::class,'Profesor'])->name('Profesor.Inicio');
route::post('/Profesor',[ProfesorController::class,'store'])->name('Profesor.store');

Route::get('/Administrador', [AdministradorController::class,'Administrador'])->name('Administrador.Inicio');
route::post('/Administrador',[AdministradorController::class,'store'])->name('Administrador.store');
Route::get('/Administrador/{profesor}/EditProfesor',[ProfesorController::class,'edit'])->name('Administrador.EditProfesor');
Route::put('/Administrador/{profesor}',[ProfesorController::class,'update'])->name('Profesor.update');
Route::get('/Administrador/{estudiante}/EditAlumno',[EstudianteController::class,'edit'])->name('Administrador.EditAlumno');
Route::put('/Administrador/{estudiante}',[Estudiantecontroller::class,'update'])->name('estudiante.update');



