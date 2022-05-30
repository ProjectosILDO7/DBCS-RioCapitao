<?php
namespace App\repositorios\paciente\contratos;

interface pacienteInterface {

    public function getList();
    public function get($id);
    public function create(array $dados);
    public function update(array $dados, $id);
    public function deletar($id);
    public function infoMedico($id);
    public function getNome($nome);
    
}