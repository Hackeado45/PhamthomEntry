<!-- resources/views/visitantes/create.blade.php -->
@extends('layout')

@section('content')
    <h1>Crear Visitante</h1>
    <form action="{{ route('visitantes.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" required>
        
        <label for="identificacion">Identificación</label>
        <input type="text" name="identificacion" required>
        
        <label for="telefono">Teléfono</label>
        <input type="text" name="telefono">
        
        <label for="email">Correo</label>
        <input type="email" name="email">
        
        <button type="submit">Crear Visitante</button>
    </form>
@endsection
