<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prescricaoMedica extends Model
{
    use HasFactory;
    protected $fillable = [
        'paciente',
        'data_nasc',
        'genero',
        'telemovel',
        'endereco',
        'presc_medica',
    ];
}
