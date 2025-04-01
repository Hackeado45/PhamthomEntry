<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visitante extends Model
{
    
    // Desactivar los timestamps (created_at y updated_at)
    public $timestamps = false;

    //use HasFactory;
    
    protected $fillable = ['nombre', 'identificacion', 'telefono', 'email'];
}
