<?php
namespace App\repositorios\horaVisita\contratos;

interface horaVisitaInterface {

    public function getList();
    public function get($id);
    public function create(array $dados);
    public function update(array $dados, $id);
    public function deletar($id);
    public function infoMedico($id);
    
}