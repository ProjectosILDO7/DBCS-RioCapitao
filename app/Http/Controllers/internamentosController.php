<?php

namespace App\Http\Controllers;

use App\Http\Requests\internamentoRequest;
use App\Models\medico;
use App\Models\paciente;
use App\Models\quartoDeInternamento;
use App\repositorios\internamentos\contratos\internamentosInterface;
use Illuminate\Http\Request;

class internamentosController extends Controller
{
    protected $model;

    public function __construct(internamentosInterface $model)
    {
        $this->model = $model;
    }
    
    public function index()
    {
        //
    }

    
    public function create()
    {
        //buscar o formulário
        $pacientes = paciente::all();
        $quartos = quartoDeInternamento::all();
        $medicos = medico::all();

        return view('layouts.internamentos.formInternamento', compact('pacientes', 'quartos', 'medicos'));
    }


    public function store(internamentoRequest $request)
    {
        //adiciona internamento
        $pacientes = paciente::all();
        $quartos = quartoDeInternamento::all();
        $medicos = medico::all();

        $inter=$this->model->create($request->all());
        if($inter){
            
            return redirect()->back()->with('alert', 'Internamento registado com sucesso!');
        }else{
            return redirect()->back()->with('alert', 'Erro ao adicionar!');
        }

    }

    
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
