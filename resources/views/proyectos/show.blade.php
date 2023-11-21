@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card border-primary mb-3" style="border-width: 2px; margin: 20px 0px">
            <div class="card-body">
                <h3 class="card-title">{{ $proyecto->nombre }}</h3>
                <p class="card-text">{{ $proyecto->descripcion }}</p>
                <p>Encargado: {{ $proyecto->encargado }}</p>
                <p>Fecha de inicio: {{ $proyecto->fecha_desde->format('d/m/Y') }}</p>
                <p>Fecha de finalización: {{ $proyecto->fecha_hasta->format('d/m/Y') }}</p>
                <span class="badge {{ $proyecto->activo ? 'bg-success' : 'bg-danger' }}">
                    {{ $proyecto->activo ? 'Activo' : 'Inactivo' }}
                </span>

                <h4>Frameworks Utilizados</h4>
                @foreach ($proyecto->frameworks as $framework)
                    <span class="badge bg-success">
                        {{ $framework->nombre }} - {{ $framework->pivot->descripcion }}
                    </span>
                @endforeach

                <h4>Lenguajes de Programación</h4>
                @php
                    $lenguajes = $proyecto->frameworks->map->lenguajeProgramacion->unique('id');
                @endphp
                @foreach ($lenguajes as $lenguaje)
                    <span class="badge bg-info">
                        {{ $lenguaje->nombre }}
                    </span>
                @endforeach
            </div>
        </div>

        <a href="{{ url('/frameworks') }}" class="btn btn-primary mt-3">Volver a la lista</a>
    </div>
@endsection