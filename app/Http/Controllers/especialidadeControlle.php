<?php

namespace App\Http\Controllers;

use App\Http\Requests\especialidadeRequest;
use App\repositorios\especialidade\contratos\especInterface;
use Illuminate\Http\Request;

class especialidadeControlle extends Controller
{
    protected $model;
    public function __construct(especInterface $esp)
    {
        $this->model = $esp;
    }
    
    public function index()
    {
      $esp = $this->model->getList();
      return view('layouts.especialidade.especialidade', compact('esp'));  
    }

    public function create()
    {
       return view('layouts.especialidade.formEspecialidade'); 
    }

    public function store(especialidadeRequest $request)
    {
        $esp=$this->model->create($request->all());
        if($esp){
            return redirect()->back()->with('alert', 'Salvo com sucesso!');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
        $modelo=$this->model->get($id);
        return view('layouts.especialidade.editEspecialidade', compact('modelo'));

    }

    public function update(Request $request, $id)
    {
        $upd = $this->model->update($request->all(), $id);
        if(!$upd){
            return redirect()->back();
        }
        return redirect()->route('user.especialidade');
    }

    public function destroy($id)
    {   if($id)
           $esp=$this->model->get($id);
           return view('layouts.especialidade.formAlertas', compact('esp'));
    }

    public function deletar($id){
        if($this->model->deletar($id));
            return redirect()->route('medicoGetList');
        return redirect()->back();
    }
}
