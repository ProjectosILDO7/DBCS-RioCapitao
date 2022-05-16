<?php

namespace App\Http\Controllers;

use App\Models\disponibMedicoConsulta;
use App\Models\User;
use App\repositorios\medico\contratos\medicoInterface;
use Illuminate\Http\Request;

class DisponibMedicoConsultaController extends Controller
{
    protected $model;
    public function __construct(medicoInterface $medico)
    {
        $this->model=$medico;
    }
    
    public function index()
    {
        $userId= new User();
        $idUser = Auth()->user()->id;

        $m = $userId->find($idUser);
        $medicoId=$m->userMedico->id;
        $medicoEsp=$this->model->get($medicoId);
        //dd($especialidades = $medicoEsp->especialidades->nome_especialidade);
    $especialidades = $medicoEsp->especialidades;
        return view('layouts.medicoUser.disponibilidadeMedica', compact('especialidades', 'medicoEsp'));
    }

    
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show(disponibMedicoConsulta $disponibMedicoConsulta)
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

    public function destroy(disponibMedicoConsulta $disponibMedicoConsulta)
    {
        //
    }
}
