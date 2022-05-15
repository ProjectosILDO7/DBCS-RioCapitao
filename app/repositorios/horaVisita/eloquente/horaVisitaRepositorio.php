<?php

namespace app\repositorios\horaVisita\eloquente;

use App\Models\horasDeVisita;
use App\repositorios\horaVisita\contratos\horaVisitaInterface;
use App\repositorios\horaVisita\eloquente\horaVisitaAbestract;

class horaVisitaRepositorio extends horaVisitaAbestract implements horaVisitaInterface{

    protected $model;
    public function __construct(horasDeVisita $model)
    {
        $this->model=$model;
    }
}