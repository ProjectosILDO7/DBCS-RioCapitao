<?php

namespace app\repositorios\quarto\eloquente;
use App\Models\quartoDeInternamento;
use App\repositorios\quarto\contratos\quartoInterface;
use App\repositorios\quarto\eloquente\quartoAbestract;

class quartoRepositorio extends quartoAbestract implements quartoInterface{

    protected $model;
    public function __construct(quartoDeInternamento $model)
    {
        $this->model=$model;
    }
}