<?php

use App\Models\Empleado;
use App\Models\RegistroVisita;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\RazonVisitaController;
use App\Http\Controllers\RegistroVisitaController;
use App\Http\Controllers\VisitanteController;

Route::resource('empleados', EmpleadoController::class);
Route::resource('razonesVisitas', RazonVisitaController::class);
Route::resource('registrosVisitas', RegistroVisitaController::class);
Route::resource('visitantes', VisitanteController::class);
