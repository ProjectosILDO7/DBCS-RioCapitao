<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paciente extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'nome',
        'data_nasc',
        'genero',
        'endereco',
        'telemovel',
        'email',
    ];

    public function OneUser(){
        return $this->hasOne(user::class);
    }
}
