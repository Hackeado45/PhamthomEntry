<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;  // Asegúrate de importar tu modelo Empleado

class EmpleadoController extends Controller
{
    public function index()
    {
        $empleados = Empleado::all();
        return response()->json($empleados);
    }

    public function create()
    {
        // No se necesita en una API
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'puesto' => 'required|string|max:255',
            'telefono' => 'required|numeric',
        ]);

        $empleado = Empleado::create($validated);

        return response()->json($empleado, 201);
    }

    public function show(string $id)
    {
        $empleado = Empleado::find($id);

        if (!$empleado) {
            return response()->json(['message' => 'Empleado no encontrado'], 404);
        }

        return response()->json($empleado);
    }

    public function edit(string $id)
    {
        // No se necesita en una API
    }

    public function update(Request $request, string $id)
    {
        $empleado = Empleado::find($id);

        if (!$empleado) {
            return response()->json(['message' => 'Empleado no encontrado'], 404);
        }

        $validated = $request->validate([
            'nombre' => 'sometimes|required|string|max:255',
            'puesto' => 'sometimes|required|string|max:255',
            'salario' => 'sometimes|required|numeric',
        ]);

        $empleado->update($validated);

        return response()->json($empleado);
    }

    public function destroy(string $id)
    {
        $empleado = Empleado::find($id);

        if (!$empleado) {
            return response()->json(['message' => 'Empleado no encontrado'], 404);
        }

        $empleado->delete();

        return response()->json(['message' => 'Empleado eliminado con éxito']);
    }
}
