@extends('layouts.master')

@section('Inicio')
<div class="container-fluid " style="background:linear-gradient(top, #2460B2 20%, #24a09a 80%);">
    <h1 style="text-align: left" class="mt-2">Propuesta Tsi</h1>
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="card mt-2">
            <div class="card-header mt-2">
                <h3 style="text-align: center">Ingresa tus datos</h3>
            </div>
            <div class="card-body">
                <form action="">
                    <select name="equipo" id="equipo" class="form-control">
                      @foreach ($Estudiantes as $index => $estudiantes)
                        <option value="{{$estudiantes->id}}">{{$estudiantes->rut}}</option>
                      @endforeach
                    </select>
                    <h5 class="my-3">Sube el archivo en formato PDF</h5>
                    <small>El archivo debe tener el nombre de la propuesta y de que trata</small>
                    <div class="form-group">
                        <label for="PDF">PDF</label>
                        <input type="file" id="PDF" name="PDF" class="form-control">
                        <button type="submit" class="btn btn-warning mt-2">Subir PDF</button>
                    </div>   
                </form>
                
            </div>
          </div>
        </div>
        
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="card">
                <div class="card-header bg-light">
                    <h3 style="text-align: center">Estado de propuestas</h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                          <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Nombre Propuesta</th>
                            <th scope="col">Estado de Propuesta</th>
                          </tr>
                        </thead>
                        <tbody class="table-group-divider">
                          <tr>
                            <th scope="row">1</th>
                            <td>Nombre 1</td>
                            <td>Apellido</td>
                            <td>Propuesta 1</td>
                            <td>Estado 1</td>
                          </tr>
                          <tr>
                            <th scope="row">2</th>
                            <td>Nombre 2</td>
                            <td>Apellido 2</td>
                            <td>Propuesta 2</td>
                            <td>Estado 2</td>
                          </tr>
                          <tr>
                            <th scope="row">3</th>
                            <td>Nombre 3</td>
                            <td>Apellido 3</td>
                            <td>Propuesta 3</td>
                            <td>Estado 3</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
       
        

    </div>
</div>
<footer>
    <div class="container-fluid bg-dark">

    </div>
</footer>
@endsection