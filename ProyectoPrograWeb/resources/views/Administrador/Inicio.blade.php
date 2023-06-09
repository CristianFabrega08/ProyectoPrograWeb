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
                                    <th scope="col">Rut</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellido</th>
                                    <th scope="col">Correo Electronico</th>
                                  </tr>
                                </thead>
                                @foreach($Estudiantes as $index => $estudiante)
                                    <tbody>
                                        <tr>
                                            <td>{{$estudiante->rut}}</td>
                                            <td>{{$estudiante->nombre}}</td>
                                            <td>{{$estudiante->apellido}}</td>
                                            <td>{{$estudiante->email}}</td>
                                        </tr>
                                  </tbody> 
                                @endforeach
                                
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
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Apellido</th>
                                    <th scope="col">Rut</th>    
                                  </tr>
                                </thead>
                                <tbody>
                                  
                                    @foreach($Profesores as $index => $profesor)
                                        <tr>
                                            <td>{{$profesor->nombre}}</td>
                                            <td>{{$profesor->apellido}}</td>
                                            <td>{{$profesor->rut}}</td>
                                        </tr>
                                    @endforeach
                                    
                                  
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
                            <form method="POST" action="{{route('Profesor.store')}}">
                                @csrf
                                <div class="mb-3">
                                    <label for="rut" class="form-label">Rut</label>
                                    <input type="text" id="rut" name="rut" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" name="nombre" id="nombre" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="apellido" class="form-label">Apellido</label>
                                    <input type="text" name="apellido" id="apellido" class="form-control">
                                </div>
                                <button type ="submit" class="btn btn-success mt-4">Agregar Profesor</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="card mt-5">
                        <div class="card-header">
                            <h3 style="text-align: center">Ingresar Alumno</h3>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{route('Administrador.store')}}">
                                @csrf
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" id="nombre" name="nombre" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="apellido" class="form-label">Apellido</label>
                                    <input type="text" name="apellido" id="apellido" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="rut_alum" class="form-label">Rut</label>
                                    <input type="text" name="rut" id="rut" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Correo Electronico</label>
                                    <input type="text" name="email" id="email" class="form-control">
                                </div>
                                <button type ="submit" class="btn btn-success mt-4">Agregar alumno</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection