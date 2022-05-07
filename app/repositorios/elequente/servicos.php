<?php
namespace App\repositorios\elequente;

use Illuminate\Http\Request;

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
    public function edit(){
        
    }
    public function store(array $dados){
       return $this->model->create($dados);  
    }
    public function delete($id){
        
    }
    public function update(array $dados, $id){
        
    }




}