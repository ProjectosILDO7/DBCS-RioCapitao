<?php

namespace app\contracts;

interface perfilContracts {

    public function getAll();
    public function get($id);
    public function store(array $dados);
    public function edit(array $dados, $id);
    public function updade(array $dados, $id);
}