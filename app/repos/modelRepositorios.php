<?php
namespace App\repos;

use app\contracts\contractoModels;
use App\Models\User;

class modelRepositorios extends servicos implements contractoModels 
{
    protected $model = User::class; 

}
