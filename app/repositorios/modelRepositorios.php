<?php
namespace App\repositorios;

use app\contracts\contractoModels;
use App\Models\User;

class modelRepositorios extends servicos implements contractoModels 
{
    protected $model = User::class; 

}
