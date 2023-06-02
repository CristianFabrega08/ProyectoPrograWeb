@extends('layouts.master')

@section('Inicio')
<div class="container bg-light">
    <h1 style="text-align: center">Propuesta Tsi</h1>
    <div class="row">
        <form action="">
            <div class="card">
                <div class="card-header">
                    <h3 style="text-align: center">Propuesta</h3>
                </div>
                <div class="card-body">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control">
                    <label for="apellido">Apellido</label>
                    <input type="text" id="apellido" name="apellido" class="form-control">
                    <label for="propuesta">Nombre de la propuesta</label>
                    <input type="text" id="propuesta" name="propuesta" class="form-control">
                    <h5 class="my-3">Sube el archivo en formato PDF</h5>
                </div>
            </div>
        </form>
        

    </div>
</div>
<footer>
    <div class="container-fluid bg-dark">

    </div>
</footer>
@endsection