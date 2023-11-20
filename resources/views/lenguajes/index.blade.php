@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Listado de Lenguajes de Programación</h2>

        <form style="margin: 20px 0px" action="{{ url('/lenguajes-de-programacion') }}" method="GET">
            <input type="text" name="search" placeholder="Buscar por nombre">

            <select name="activo">
                <option value="">Todos</option>
                <option value="1">Activo</option>
                <option value="0">Inactivo</option>
            </select>
            <button type="submit">Buscar</button>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Version</th>
                    <th>Estado</th>
                    <th>Número de Frameworks</th>
                    <th>Número de Proyectos</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($lenguajes as $lenguaje)
                    <tr>
                        <td>{{ $lenguaje->nombre }}</td>
                        <td>{{ $lenguaje->version }}</td>
                        <td><span class="badge {{ $lenguaje->activo ? 'bg-success' : 'bg-danger' }}">{{ $lenguaje->activo ? 'Activo' : 'Inactivo' }}</span></td>
                        <td>{{ $lenguaje->frameworks_count }}</td>
                        <td>{{ $lenguaje->proyectos_count }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ url('/') }}" class="btn btn-primary">Volver</a>
    </div>
@endsection