<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medico extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'nome',
        'telefone',
        'email',
        'password',
    ];

    public function especialidades(){
        return $this->belongsToMany(especialidade::class);
    }
}
