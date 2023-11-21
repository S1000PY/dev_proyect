@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Listado de Frameworks</h2>
    <form action="{{ url('/frameworks') }}" method="GET">
        <input type="text" name="search" placeholder="Buscar por nombre...">
        <button type="submit">Buscar</button>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Lenguaje de Programación</th>
                <th>Imagen</th>
                <th>Número de Proyectos</th>
                <th>Proyectos Asociados</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($frameworks as $framework)
                <tr>
                    <td>{{ $framework->nombre }}</td>
                    <td>{{ $framework->lenguajeProgramacion->nombre }}</td>
                    <td>
                        <a href="{{ $framework->pagina_web_url }}" target="_blank">
                            <img src="{{ $framework->logo_url }}" alt="{{ $framework->nombre }}" style="width: 50px; height: auto;">
                        </a>
                    </td>
                    <td>{{ $framework->proyectos->count() }}</td>
                    <td>
                        @foreach ($framework->proyectos as $proyecto)
                            <a href="{{ url('/proyectos/'.$proyecto->id) }}">{{ $proyecto->nombre }}</a><br>
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ url('/') }}" class="btn btn-primary">Volver al inicio</a>
</div>
@endsection