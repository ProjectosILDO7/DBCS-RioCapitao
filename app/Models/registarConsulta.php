<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registarConsulta extends Model
{
    use HasFactory;
    protected $fillable = [
        'paciente_id',
        'disponib_medico_consulta_id'
    ];
    
}
