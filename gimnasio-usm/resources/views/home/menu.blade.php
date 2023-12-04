<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap-custom.min.css">
    <link rel="stylesheet" href="{{ asset('css/personalizado.css') }}">
    <title>Inicio de Sesión</title>
</head>
<body class="bg-warning">
    <div class="container-fluid">
        {{-- usuario --}}
        <div class="row text-white bg-dark">
            <div class="col-11 ">    
                Binvenido <b>User1</b>
            </div>
            <div class="col-1 text-right d-none d-lg-block">
              <a href="#" class="btn btn-info w-100 text-white text-decoration-none ">Cerrar Sesión</a>
            </div>
        </div>
    </div>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark" data-bs-theme="bg-dark">
        <div class="container-fluid">
            <div class="p-2">
                <img src="{{ asset('images/logoUSM.png') }}" style="width:60px">
            </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="#">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Reservar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Datos Personales</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Cambiar contraseña</a>
              </li>
              <li class="nav-item">
                <a class="nav-link d-lg-none" href="#">Cerrar Sesión</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>