<?php
namespace App\repos;

abstract class servicos {

    protected $model;

    public function __construct()
    {
        $this->model = $this->resolvModel();
    }

    protected function resolvModel(){
        return app($this->model);
    }

    public function getAll(){

    }
    public function get($id){

    }
    public function store(array $dados){

    }
    public function edit(array $dados, $id){

    }
    public function updade(array $dados, $id){

    }




}