@extends('layouts.master')

@section('Inicio')
    <div class="container-fluid bg-light ">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 style="text-align: center">Propuestas enviadas</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <thead>
                              <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Correo</th>
                                <th scope="col">Rut</th>
                                <th scope="col">Comentarios</th>
                                <th>Acciones</th>
                              </tr>
                            </thead>
                            <tbody class="table-group-divider">
                              <tr>
                                <td class="align-middle">Nombre 1</td>
                                <td class="align-middle">Apellido</td>
                                <td class="align-middle">Correo</td>
                                <td class="align-middle">Rut</td>
                                <td>
                                    <label for="comentarios" class="form-label">Ingresa comentarios</label>
                                    <textarea name="comnetarios" id="comentarios" cols="30" rows="5" class="form-control"></textarea>
                                </td>
                                <td class="align-middle"><a class="btn btn-sm btn-warning pb-0 text-white"><span class="material-icons">download</span></td>
                                
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@endsection