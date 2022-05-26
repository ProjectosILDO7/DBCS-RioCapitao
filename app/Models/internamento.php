<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class internamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'paciente_id',
        'quarto_de_internamentos_id',
        'medico_respons',
    ];
}
