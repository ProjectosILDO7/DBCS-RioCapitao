<?php
namespace App\repositorios\contratos;

interface modelContrato
{
    public function getAll();
    public function get($id);
    public function edit();
    public function store(array $dados);
    public function delete($id);
    public function update(array $dados, $id);
}