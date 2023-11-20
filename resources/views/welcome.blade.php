<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Dev Project - Inicio</title>
        <link href="{{ asset('styles/bootstrap.min.css') }}" rel="stylesheet">
    </head>

    <body>
        <div class="container mt-5">
            <h1 class="text-center mb-4">Bienvenido</h1>
            <div class="row">
                <div class="col-md-6 text-center">
                    <p>Nombre del proyecto: Dev Project</p>
                    <img src="{{ asset('image/trabajo4.png') }}" class="img-fluid" alt="DER">
                </div>

                <div class="col-md-6">
                    <p>Nombre del alumno: Alfredo Coronel</p>

                    <nav class="nav flex-column">
                        <div class="mt-4">
                            <a href="{{ url('/lenguajes-de-programacion') }}" class="btn btn-primary">Ver lenguajes de programación</a>
                        </div>

                        <div class="mt-4">
                            <a href="{{ url('/frameworks') }}" class="btn btn-primary"> Ver frameworks</a>
                        </div>

                        <div class="mt-4">
                            <a href="{{ url('/proyectos') }}" class="btn btn-primary">Ver proyectos</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>

        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>