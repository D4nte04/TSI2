<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-custom.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/personalizado.css') }}">
    <title>Inicio de Sesión</title>
</head>
<body class="login">
    <div class="container-fluid vh-100 d-flex flex-column justify-content-center">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="row bg-light shadow-lg" style="height: 25rem">
                    {{-- titulo y logo --}}
                    <div class="col-4 bg-primary d-flex flex-column justify-content-center align-items-center text-center">
                        <div class="p-2 mb-3 rounded">
                            <img src="{{ asset('images/logoUSM.png') }}" style="width: 150px">
                        </div>
                        <h4 class="text-light">Sistema de Inscripción Gimnasio UTFSM</h4>
                        <h6 class="text-light">Sede Viña del Mar</h6>
                    </div>
                    {{-- formulario --}}
                    <div class="col-8 d-flex  bg-white flex-column justify-content-center">
                        <h4>Inicio de Sesión</h4>
                        <small>Para alumnos y funcionarios</small>
                        <div class="card">
                            <div class="card-body">
                                <form action="">
                                    <div class="form-group">
                                        <label for="rut">Rut del Usuario:</label>
                                        <input type="text" id="rut" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="contraseña">Contraseña</label>
                                        <input type="password" id="contraseña" class="form-control">
                                    </div>
                                    <div class="text-right me-3">
                                        <div class="row">
                                            <div class="col col-lg-5 offset-lg-10">
                                                <a href="#" class="btn btn-success mt-3">Iniciar Sesión</a>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    {{-- formulario --}}
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>