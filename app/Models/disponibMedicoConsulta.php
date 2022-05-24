<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class disponibMedicoConsulta extends Model
{
    use HasFactory;

    protected $fillable = [
        'medico_id',
        'medico',
        'data_dispon',
        'hora_inicial',
        'hora_final',
        'especialidade'
    ];

    

}
