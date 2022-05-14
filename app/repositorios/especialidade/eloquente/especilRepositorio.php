<?php

namespace app\repositorios\especialidade\eloquente;

use App\Models\especialidade;
use App\repositorios\especialidade\contratos\especInterface;
use App\repositorios\especialidade\eloquente\especialAbestract;

class especilRepositorio extends especialAbestract implements especInterface{

    protected $model;
    public function __construct(especialidade $model)
    {
        $this->model=$model;
    }
}