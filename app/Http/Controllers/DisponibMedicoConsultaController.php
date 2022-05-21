<?php

namespace App\Http\Controllers;

use App\Http\Requests\disponibilidadeMedicaConsultRequest;
use App\Models\disponibMedicoConsulta;
use App\Models\medico;
use App\Models\User;
use App\repositorios\disponibilidadeConsulta\contratos\disponibilidadeInterface;
use Illuminate\Http\Request;

class DisponibMedicoConsultaController extends Controller
{
    protected $model;
    public function __construct(disponibilidadeInterface $medico)
    {
        $this->model=$medico;
    }
    
    public function index()
    {
        $userId= new User();
        $idUser = Auth()->user()->id;

        $m = $userId->find($idUser);
        $medicoId=$m->userMedico->id;
        $medico=$m->userMedico->nome;
        //instanciar o medel medico
        $medicoEsp=medico::findOrFail($medicoId);
        $dispo = disponibMedicoConsulta::where('medico_id', $medicoId)->get();

        $especialidades = $medicoEsp->especialidades;
        return view('layouts.medicoUser.disponibilidadeMedica', compact( 'dispo', 'especialidades', 'medicoEsp', 'medicoId', 'medico'));
    }

    
    public function create()
    {
        $userId= new User();
        $idUser = Auth()->user()->id;

        $m = $userId->find($idUser);
        $medicoId=$m->userMedico->id;
        $medico=$m->userMedico->nome;
        //instanciar o medel medico
        $medicoEsp=medico::findOrFail($medicoId);
        $dispo = disponibMedicoConsulta::where('medico_id', $medicoId)->get();

        $especialidades = $medicoEsp->especialidades;
        return view('layouts.medicoUser.formDispo', compact( 'dispo', 'especialidades', 'medicoEsp', 'medicoId', 'medico'));
    }

    
    public function store(disponibilidadeMedicaConsultRequest $request)
    {
        //
        $disp = $this->model->create($request->all());
        if($disp){
            return redirect()->route('mostraDisponibilidade');
        }

    }

    
    public function infoDisponibilidade(disponibMedicoConsulta $disponibMedicoConsulta)
    {
        //
    }

    
    public function edit(disponibMedicoConsulta $disponibMedicoConsulta)
    {
        //
    }

   
    public function update(Request $request, disponibMedicoConsulta $disponibMedicoConsulta)
    {
        //
    }

    public function confirmDelete($id)
    {
        $disponibilidade=$this->model->get($id);
        return view('layouts.medicoUser.formAlert', compact('disponibilidade'));
        //$d = $this->model->deletar($id);
    }

    public function destroy($id)
    {
        //
        $del=$this->model->deletar($id);
        if($del){
            return redirect()->route('mostraDisponibilidade');
        }

    }
}
