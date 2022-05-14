<?php
namespace app\repositorios\medico\eloquente;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

abstract class medicoAbestract{

    protected $mode;

    public function __construct(Model $model)
    {
        $this->model=$model;
    }
    
    public function getList(){
        return $this->model->all();
    }
    public function get($id){
       return $this->model->find($id);
           
    }
    public function create(array $dados){
          return $this->model->create($dados);   
    }
    
    public function infoMedico($id){
        return $this->model->with('especialidades')->findOrFail($id);
    }
    public function update(array $dados, $id){
      
        return $this->model->with('especialidades')->find($id)->update($dados);
    }
    public function deletar($id){
        if(!$this->model->findOrfail($id))
            return redirect()->back();
        return $this->model->find($id)->delete();
    }
}