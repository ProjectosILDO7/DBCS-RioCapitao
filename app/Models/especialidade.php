<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class especialidade extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome_especialidade'
    ];

    public function medicos(){
        return $this->belongsTo(medico::class);
    }
}
