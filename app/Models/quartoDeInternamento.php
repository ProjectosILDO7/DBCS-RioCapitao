<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quartoDeInternamento extends Model
{
    use HasFactory;
    protected $fillable = [
        'num_quart',
        'num_cama',
        'piso'
    ];

    public function internamentos(){
        return $this->belongsTo(internamento::class);
    }
}
