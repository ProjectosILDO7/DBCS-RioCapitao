<?php
namespace App\repositorios\internamentos\eloquente;

use Illuminate\Database\Eloquent\Model;

abstract class internamentoAbstract{

    protected $model;

    public function __construct(Model $model)
    {
        $this->model=$model;
    }

    public function getList(){
        return $this->model->get();
    }
    public function get($id){
        return $this->model->find($id);
    }
    public function create(array $dados){
        return $this->model->create($dados);
    }
    public function update(array $dados, $id){
        return $this->model->update($dados, $id);
    }
    public function deletar($id){
        return $this->model->find($id)->delete();
    }
    public function infoInternamento($id){
        return $this->model->find($id);
    }
}