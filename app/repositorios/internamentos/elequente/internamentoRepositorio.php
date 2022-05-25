<?php
namespace App\repositorios\internamentos\eloquente;

use App\Models\internamento;
use App\repositorios\internamentos\contratos\internamentosInterface;

class internamentoRepository extends internamentoAbstract implements internamentosInterface {

    protected $model;

    public function __construct(internamento $model)
    {
        $this->model=$model;
    }
    
}