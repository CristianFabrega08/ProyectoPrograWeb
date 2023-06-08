@extends('layouts.master')

@section('Inicio')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <div class="card mt-5">
                <div class="card-header">
                    <h3 style="text-align: center">Editar datos</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('estudiante.update',$estudiante->rut)}}" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="rut" class="form-label">Rut del alumno: {{$estudiante->rut}} </label>
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre actual: {{$estudiante->nombre}}</label>
                            <input type="text" name="nombre" id="nombre" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label">apellido actual: {{$estudiante->apellido}}</label>
                            <input type="text" name="apellido" id="apellido" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo actual: {{$estudiante->email}}</label>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                        <button type ="submit" class="btn btn-success mt-4">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection