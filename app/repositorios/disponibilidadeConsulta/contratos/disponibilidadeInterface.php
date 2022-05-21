<?php
namespace App\repositorios\disponibilidadeConsulta\contratos;

interface disponibilidadeInterface {

    public function getList();
    public function get($id);
    public function create(array $dados);
    public function update(array $dados, $id);
    public function deletar($id);
    public function infoDisponibilidade($id);
    
}