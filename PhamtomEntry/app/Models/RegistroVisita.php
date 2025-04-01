<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RegistroVisita extends Model
{
    protected $fillable = ['visitante_id', 'razon_id', 'empleado_id', 'fecha_visita', 'estado', 'comentarios'];
}
