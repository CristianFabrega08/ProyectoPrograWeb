<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap-custom.min.css')}}">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <!--Barra de busqueda-->
    <nav class="navbar navbar-expand-lg  bg-dark" style="height: 100px">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="#">TSI</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link text-white" href="{{route('Estudiante.inicio')}}">Alumno</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="{{route('Profesor.Inicio')}}">Profesor</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="{{route('Administrador.Inicio')}}">Administrador</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>

    @yield('Inicio')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" 
    crossorigin="anonymous"></script>
</body>

</html>