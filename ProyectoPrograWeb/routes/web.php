<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/Estudiante', [HomeController::class, 'Estudiante'])->name('Estudiante.inicio');
Route::get('/Profesor', [HomeController::class, 'Profesor'])->name('Profesor.Inicio');
Route::get('/Administrador', [HomeController::class, 'Administrador'])->name('Administrador.Inicio');

