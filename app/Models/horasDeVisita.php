<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class horasDeVisita extends Model
{
    use HasFactory;
    protected $fillable = [
        'hora_visita',
        'dia_visita',
        'periodo',
    ];
}
