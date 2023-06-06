@extends('layouts.master')

@section('Inicio')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3 style="text-align: center">Lista de alumnos</h3>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Rut</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellido</th>
                                    <th colspan="2">Acciones</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Rut</td>
                                    <td>nombre</td>
                                    <td>Apellido</td>
                                    <td>
                                        <span data-bs-toggle="tooltip" data-bs-placement="top" title="Borrar nombre">
                                            <button type="button" class="btn btn-sm btn-danger">
                                                <span class="material-icons text-black">delete</span>
                                            </button>
                                        </span>
                                    </td>
                                    <td>
                                        <span>
                                            <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" title="Actualizar">
                                                <span class="material-icons">edit</span>
                                            </a>
                                        </span>
                                    </td>
                                  </tr>
                                  
                                </tbody>
                              </table>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3 style="text-align: center">Profesores TSI</h3>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellido</th>
                                    <th scope="col">Rut</th>
                                    <th colspan="2">Acciones</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">1</th>
                                    <td>Dago</td>
                                    <td>Cabrera</td>
                                    <td>dioss</td>
                                    <td>
                                        <span data-bs-toggle="tooltip" data-bs-placement="top" title="Borrar nombre">
                                            <button type="button" class="btn btn-sm btn-danger">
                                                <span class="material-icons text-black">delete</span>
                                            </button>
                                        </span>
                                    </td>
                                    <td>
                                        <span>
                                            <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="tooltip" title="Actualizar">
                                                <span class="material-icons">edit</span>
                                            </a>
                                        </span>
                                    </td>
                                  </tr>
                                  
                                </tbody>
                              </table>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="card mt-5">
                        <div class="card-header">
                            <h3 style="text-align: center">Ingresar Profesores</h3>
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
    </div>
@endsection