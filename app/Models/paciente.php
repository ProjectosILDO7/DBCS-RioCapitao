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
        'status'
    ];

    public function OneUser(){
        return $this->hasOne(user::class);
    }

    public function rgConsultas(){
        return $this->belongsTo(registarConsulta::class);
    }

    public function internamento(){
        return $this->hasOne(internamento::class);
    }
}
