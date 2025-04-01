<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;

// Aquí defines las rutas de tu API

Route::middleware('api')->get('/empleados', [EmpleadoController::class, 'index']);
Route::middleware('api')->post('/empleados', [EmpleadoController::class, 'store']);
Route::middleware('api')->get('/empleados/{id}', [EmpleadoController::class, 'show']);
Route::middleware('api')->put('/empleados/{id}', [EmpleadoController::class, 'update']);
Route::middleware('api')->delete('/empleados/{id}', [EmpleadoController::class, 'destroy']);
