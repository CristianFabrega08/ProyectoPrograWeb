@extends('layouts.master')

@section('Inicio')
<div class="container-fluid " style="background:linear-gradient(top, #2460B2 20%, #24a09a 80%);">
    <h1 style="text-align: left" class="mt-2">Propuesta Tsi</h1>
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="card mt-2">
            <div class="card-header mt-2">
                <h3 style="text-align: center">Ingresa tu Rut</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{route('Estudiante.store')}}" enctype="multipart/form-data">
                  @csrf
                    <select name="estudiante_rut" id="estudiante_rut" class="form-control">
                      @foreach ($Estudiantes as $index => $estudiantes)
                        <option value="{{$estudiantes->rut}}">{{$estudiantes->rut}}</option>
                      @endforeach
                    </select>
                    <h5 class="my-3">Sube el archivo en formato PDF</h5>
                    <small>El archivo debe tener el nombre de la propuesta y de que trata</small>
                    <div class="form-group">
                        <label for="documento">PDF</label>
                        <input type="file" id="documento" name="documento" class="form-control">
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
                            <th scope="col">Id</th>
                            <th scope="col">Rut</th>
                            <th scope="col">Fecha y hora de subida</th>
                            <th scope="col">Estado de propuesta</th>
                            <th scope="col">Comentario de profesor</th>
                          </tr>
                        </thead>
                        @foreach($Propuestas as $index=>$propuesta)
                          <tbody>
                            <tr>
                              <td>{{$propuesta->id}}</td>
                              <td>{{$propuesta->estudiante_rut}}</td>
                              <td>{{$propuesta->Fecha}}</td>
                              <td>{{$propuesta->estado}}</td>
                            </tr>
                          </tbody>
                        @endforeach
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