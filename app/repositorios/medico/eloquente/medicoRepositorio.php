<?php

namespace app\repositorios\medico\eloquente;
use App\Models\medico;
use App\repositorios\medico\contratos\medicoInterface;
use App\repositorios\medico\eloquente\medicoAbestract;

class medicoRepositorio extends medicoAbestract implements medicoInterface{

    protected $model;
    public function __construct(medico $model)
    {
        $this->model=$model;
    }
}