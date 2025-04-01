<?php

namespace App\Http\Controllers;

use App\Models\Visitante;
use Illuminate\Http\Request;

class VisitanteController extends Controller
{
    // Mostrar todos los visitantes
    public function index()
    {
        $visitantes = Visitante::all();  // Obtener todos los registros de la tabla Visitantes
        return view('visitantes.index', compact('visitantes'));
    }

    // Mostrar el formulario para crear un nuevo visitante
    public function create()
    {
        return view('visitantes.create');
    }

    // Almacenar un nuevo visitante en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'identificacion' => 'required|string|max:50|unique:visitantes',
            'telefono' => 'nullable|string|max:15',
            'email' => 'nullable|email|max:100',
        ]);

        Visitante::create($request->all());  // Crear un nuevo visitante

        return redirect()->route('visitantes.index');  // Redirigir al índice de visitantes
    }

    // Mostrar los detalles de un visitante
    public function show($id)
    {
        $visitante = Visitante::findOrFail($id);  // Buscar al visitante por ID
        return view('visitantes.show', compact('visitante'));
    }

    // Mostrar el formulario para editar un visitante
    public function edit($id)
    {
        $visitante = Visitante::findOrFail($id);  // Buscar al visitante por ID
        return view('visitantes.edit', compact('visitante'));
    }

    // Actualizar los detalles de un visitante en la base de datos
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'identificacion' => 'required|string|max:50|unique:visitantes,identificacion,' . $id,
            'telefono' => 'nullable|string|max:15',
            'email' => 'nullable|email|max:100',
        ]);

        $visitante = Visitante::findOrFail($id);  // Buscar al visitante por ID
        $visitante->update($request->all());  // Actualizar los datos del visitante

        return redirect()->route('visitantes.index');  // Redirigir al índice de visitantes
    }

    // Eliminar un visitante
    public function destroy($id)
    {
        $visitante = Visitante::findOrFail($id);  // Buscar al visitante por ID
        $visitante->delete();  // Eliminar al visitante

        return redirect()->route('visitantes.index');  // Redirigir al índice de visitantes
    }
}
