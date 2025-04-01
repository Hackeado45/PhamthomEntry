<!-- resources/views/visitantes/show.blade.php -->
@extends('layout')

@section('content')
    <h1>Detalles del Visitante</h1>
    <p><strong>Nombre:</strong> {{ $visitante->nombre }}</p>
    <p><strong>Identificación:</strong> {{ $visitante->identificacion }}</p>
    <p><strong>Teléfono:</strong> {{ $visitante->telefono }}</p>
    <p><strong>Correo:</strong> {{ $visitante->email }}</p>
    
    <a href="{{ route('visitantes.edit', $visitante->id) }}">Editar</a>
    <form action="{{ route('visitantes.destroy', $visitante->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
@endsection
