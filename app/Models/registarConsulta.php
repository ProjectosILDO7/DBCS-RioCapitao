<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registarConsulta extends Model
{
    use HasFactory;
    protected $fillable = [
        'paciente',
        'disponib_medica_id'
    ];

    public function rgConsultas(){
        return $this->belongsTo(disponibMedicoConsulta::class);
    }
    
}
