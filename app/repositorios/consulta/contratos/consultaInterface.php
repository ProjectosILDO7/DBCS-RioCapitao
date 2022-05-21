<?php
namespace App\repositorios\consulta\contratos;

interface consultaInterface {

    public function getList();
    public function get($id);
    public function create(array $dados);
    public function update(array $dados, $id);
    public function deletar($id);
    public function infoMedico($id);
    
}