<?php

namespace app\repositorios\consulta\eloquente;

use App\Models\consultaMarcada;
use App\repositorios\consulta\contratos\consultaInterface;
use App\repositorios\consulta\eloquente\consultaAbestract;

class consultaRepositorio extends consultaAbestract implements consultaInterface{

    protected $model;
    public function __construct(consultaMarcada $model)
    {
        $this->model=$model;
    }
}