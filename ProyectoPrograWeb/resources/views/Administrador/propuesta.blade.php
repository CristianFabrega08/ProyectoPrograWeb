@extends('layouts.master')

@section('Inicio')

<body>
    <div class="row">
        <div class="row">
            <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <div class="card mt-5">
                    <div class="card-header">
                        <h3>Propuestas</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">Rut</th>
                                    <th scope="col">Propuesta</th>
                                    <th scope="col">Estado de propuesta</th>
                                  </tr>
                                </thead>
                            <form method="POST" action="{{route('Administrador.update')}}" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                    <tbody>
                                    @foreach($Propuestas as $index => $propuesta)
                                        <tr>
                                            <th>{{$propuesta->estudiante_rut}}</th>
                                            <td>{{$propuesta->documento}}</td>
                                            <td>
                                                <div>
                                                    <div class="form-check form-check-inline">
                                                        <input type="radio" class="form-check-input" id="estado-3" name="estado" value="3" @if($propuesta->estado==3) checked @endif>
                                                        <label class="form-check-label" for="estado-1">Aceptado</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input type="radio" class="form-check-input" id="estado-2" name="estado" value="2" @if($propuesta->estado==2) checked @endif>
                                                        <label class="form-check-label" for="estado-2">rechazado</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                        <input type="radio" class="form-check-input" id="estado-1" name="estado" value="1" @if($propuesta->estado==1) checked @endif>
                                                        <label class="form-check-label" for="estado-1">en revision</label>
                                                    </div>
                                                </div>   
                                            </td>
                                            <td>
                                                <button type ="submit" class="btn btn-success">Subir</button>   
                                            </td>
                                        </tr>
                                    @endforeach 
                                    </tbody>
                             </form>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection