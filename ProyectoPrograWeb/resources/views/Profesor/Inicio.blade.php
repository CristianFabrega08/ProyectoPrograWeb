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
                                <th scope="col">Propuesta</th>
                                <th scope="col">Estado de Propuesta</th>
                              </tr>
                            </thead>
                            <tbody class="table-group-divider">
                              <tr>
                                <td class="align-middle">Nombre 1</td>
                                <td class="align-middle">Apellido</td>
                                <td class="align-middle">Correo</td>
                                <td class="align-middle">Rut</td>
                                <td class="align-middle"><a class="btn btn-sm btn-warning pb-0 text-white"><span class="material-icons">download</span></td>
                                <td class="align-middle">
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" id="est-rechazado" name="estado" value="Rechazado">
                                            <label class="form-check-label" for="est-rechazado">Rechazado</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" id="est-aceptado" name="estado" value="Aceptado">
                                            <label class="form-check-label" for="est-aceptado">Aceptado</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input" id="est-revision" name="estadp" value="En-Revision">
                                            <label class="form-check-label" for="est-revision">En revision</label>
                                        </div>
                                        
                                </td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@endsection