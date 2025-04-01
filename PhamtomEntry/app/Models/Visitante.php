<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visitantes extends Model
{
    protected $fillable = ['nombre', 'identificacion', 'telefono', 'email'];
}
