@extends('layouts.master')

@section('Inicio')
    <body style="background: linear-gradient(to bottom, #52cbdc 100% , #4f9aeb);">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-4 mt-5 my-3">
                    <div class="card" style="width: 20rem;">
                        <img src="https://www.aauniv.com/s/blog/wp-content/uploads/2020/04/estudiar-online-en-casa-para-universitarios.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Alumnos</h5>
                          <p class="card-text">Presiona el boton para ir al apartado de estudiantes</p>
                          <a href="{{route('Estudiante.inicio')}}" class="btn btn-success">Alumnos</a>
                        </div>
                      </div>
                </div>
                <div class="col-sm-12 col-lg-4 mt-5 my-3">
                    <div class="card" style="width: 20rem; ">
                        <img src="https://yt3.googleusercontent.com/ytc/AGIKgqPyqNC4i-5FNgcIvwRCYP0hVJ90FEK6XS6tJJXryA=s900-c-k-c0x00ffffff-no-rj" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Profesores</h5>
                          <p class="card-text">Presiona el boton para ir al apartado de profesores.</p>
                          <a href="{{route('Profesor.Inicio')}}" class="btn btn-primary">Profesores</a>
                        </div>
                      </div>
                </div>
                <div class="col-sm-12 col-lg-4 mt-5 my-3">
                    <div class="card" style="width: 20rem;">
                        <img src="data:image/png;base64,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" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Administrador</h5>
                          <p class="card-text">Presiona el boton para ir al apartado de Administrador</p>
                          <a href="#" class="btn btn-primary">Administrador</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>

       
    </body>
@endsection