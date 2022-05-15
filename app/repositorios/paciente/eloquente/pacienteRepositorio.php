<?php

namespace app\repositorios\paciente\eloquente;
use App\Models\paciente;
use App\repositorios\paciente\contratos\pacienteInterface;
use App\repositorios\paciente\eloquente\pacienteAbestract;

class pacienteRepositorio extends pacienteAbestract implements pacienteInterface{

    protected $model;
    public function __construct(paciente $model)
    {
        $this->model=$model;
    }
}