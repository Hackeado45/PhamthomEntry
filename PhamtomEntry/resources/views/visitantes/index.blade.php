<!-- resources/views/visitantes/index.blade.php -->
@extends('layout')

@section('content')
    <h1>Visitantes</h1>
    <a href="{{ route('visitantes.create') }}">Crear Visitante</a>
    
    @foreach($visitantes as $visitante)
        <div>
            <h3>{{ $visitante->nombre }}</h3>
            <p>{{ $visitante->identificacion }}</p>
            <a href="{{ route('visitantes.edit', $visitante->id) }}">Editar</a>
            <form action="{{ route('visitantes.destroy', $visitante->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        </div>
    @endforeach
@endsection
