<?php

namespace app\repositorios\disponibilidadeConsulta\eloquente;

use App\Models\disponibMedicoConsulta;
use App\repositorios\disponibilidadeConsulta\contratos\disponibilidadeInterface;
use App\repositorios\disponibilidadeConsulta\eloquente\disponibilidadeAbestract;

class disponibilidadeRepositorio extends disponibilidadeAbestract implements disponibilidadeInterface{

    protected $model;
    public function __construct(disponibMedicoConsulta $model)
    {
        $this->model=$model;
    }
}