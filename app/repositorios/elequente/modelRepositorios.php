<?php
namespace App\repositorios\elequente;

use App\Models\User;
use App\repositorios\contratos\modelContrato;

class modelRepositorios extends servicos implements modelContrato
{
    protected $model = User::class; 

}
