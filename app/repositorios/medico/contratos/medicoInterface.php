<?php
namespace App\repositorios\medico\contratos;

interface medicoInterface {

    public function getList();
    public function get($id);
    public function create(array $dados);
    public function edit($id);
    public function update(array $dados, $id);
    public function deletar($id);
    
}