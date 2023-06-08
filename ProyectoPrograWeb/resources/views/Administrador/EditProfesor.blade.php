@extends('layouts.master')

@section('Inicio')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
            <div class="card mt-5">
                <div class="card-header">
                    <h3 style="text-align: center">Editar nombre </h3>
                </div>
                <div class="card-body">
                    <form action="">
                        <div class="mb-3">
                            <label for="nom-profe" class="form-label">Nombre</label>
                            <input type="text" id="nom-profe" name="nom-profe" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="apellido-profe" class="form-label">Apellido</label>
                            <input type="text" name="apellido-profe" id="apellido-profe" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="rut-profe" class="form-label">Rut</label>
                            <input type="text" name="rut-profe" id="rut-profe" class="form-control">
                        </div>
                        <button type ="submit" class="btn btn-success mt-4">Agregar Profesor</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection