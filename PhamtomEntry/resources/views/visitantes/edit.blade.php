<!-- resources/views/visitantes/edit.blade.php -->
@extends('layout')

@section('content')
    <h1>Editar Visitante</h1>
    <form action="{{ route('visitantes.update', $visitante->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="{{ $visitante->nombre }}" required>
        
        <label for="identificacion">Identificación</label>
        <input type="text" name="identificacion" value="{{ $visitante->identificacion }}" required>
        
        <label for="telefono">Teléfono</label>
        <input type="text" name="telefono" value="{{ $visitante->telefono }}">
        
        <label for="email">Correo</label>
        <input type="email" name="email" value="{{ $visitante->email }}">
        
        <button type="submit">Actualizar Visitante</button>
    </form>
@endsection
