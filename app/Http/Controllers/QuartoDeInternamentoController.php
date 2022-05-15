<?php

namespace App\Http\Controllers;

use App\Http\Requests\quartoRequest;
use App\repositorios\quarto\contratos\quartoInterface;


class QuartoDeInternamentoController extends Controller
{
    protected $model;
    public function __construct(quartoInterface $esp)
    {
        $this->model = $esp;
    }
    
    public function index()
    {
      //
      $quartos = $this->model->getList();
      return view('layouts.quarto.quarto', compact('quartos'));  
    }

    public function create()
    {
    
       return view('layouts.quarto.formQuarto'); 
    }

    public function store(quartoRequest $request)
    {   
        $this->model->create($request->all());
        return redirect()->route('quartoList'); 
    
    }

    public function edit($id)
    {
        //
        $quarto=$this->model->get($id);
        return view('layouts.quarto.editQuarto', compact('quarto'));

    }

    public function update(quartoRequest $request, $id)
    {
        
        $up = $this->model->get($id)->update($request->all());
       
        if(!$up){
            return redirect()->back();
        }
        return redirect()->route('quartoList');
    }

    public function destroy($id)
    {   if($id)
           $quarto=$this->model->get($id);
           return view('layouts.quarto.formAlertas', compact('quarto'));
    }

    public function deletar($id)
    {
            $this->model->deletar($id);
            return redirect()->route('quartoList');
   
    }
}
