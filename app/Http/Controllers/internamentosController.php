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
        //busca do id do paciente
        $idPaciente=$request->paciente_id;
        //instaciar a class paciente
        $pac=paciente::find($idPaciente);
        //actualizar status do paciente para internado(a)
        $pac->update(['status'=>'Internado(a)']);

        $inter=$this->model->create($request->all());
        if($inter){
            
            return redirect()->back()->with('alert', 'Internamento registado com sucesso!');
        }else{
            return redirect()->back()->with('alert', 'Erro ao adicionar!');
        }

    }

    
    public function show($id)
    {
        //procurar o paciente atravez do ID
        $paciente = paciente::find($id);
        //Buscar o nome do médico responsavel
        $medicoResponsavel=$paciente->internamento->medico_respons;
        $quartoId=$paciente->internamento->quarto_de_internamentos_id;
        $quarto = quartoDeInternamento::find($quartoId);
        return view('layouts.internamentos.detalheInternamento', compact('paciente','medicoResponsavel', 'quarto'));
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
