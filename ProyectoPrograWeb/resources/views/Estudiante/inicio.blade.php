@extends('layouts.master')

@section('Inicio')
<div class="container-fluid bg-light">
    <h1 style="text-align: left" class="mt-2">Propuesta Tsi</h1>
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="card mt-2">
            <div class="card-header mt-2">
                <h3 style="text-align: center">Ingresa tus datos</h3>
            </div>
            <div class="card-body">
                <form action="">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="form-control">
                    <label for="apellido">Apellido</label>
                    <input type="text" id="apellido" name="apellido" class="form-control">
                    <label for="propuesta">Nombre de la propuesta</label>
                    <input type="text" id="propuesta" name="propuesta" class="form-control">
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
                            <th scope="col">nombre</th>
                            <th scope="col">apellido</th>
                            <th scope="col">correo</th>
                            <th scope="col">rut</th>
                            <th scope="col">Propuesta</th>
                          </tr>
                        </thead>
                        <tbody class="table-group-divider">
                          <tr>
                            <td class="align-middle">Nombre 1</td>
                            <td class="align-middle">Apellido</td>
                            <td class="align-middle">correo</td>
                            <td class="align-middle">rut</td>
                            <td class="align-middle"><a class="btn btn-sm btn-warning pb-0 text-white"><span class="material-symbols-outlined">download</span></td>
                            
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