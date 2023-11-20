<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Dev Project</title>
        <link href="{{ asset('styles/bootstrap.min.css') }}" rel="stylesheet">
    </head>

    <body>
        <main class="py-4">
            @yield('content')
        </main>

        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>