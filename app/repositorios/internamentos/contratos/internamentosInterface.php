<?php
namespace App\repositorios\internamentos\contratos;

interface internamentosInterface {

    public function getList();
    public function get($id);
    public function create(array $dados);
    public function update(array $dados, $id);
    public function deletar($id);
    public function infoInternamento($id);
}