<?php
namespace App\repos;

use App\contracts\perfilContracts;
use App\Models\User;

class perfiRepos extends perfiReposAbstract implements perfilContracts
{
    protected $model = User::class;  
}
