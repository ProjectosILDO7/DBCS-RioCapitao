<?php

namespace App\Http\Controllers;

use App\Http\Requests\registarConsultaRequest;
use App\Models\disponibMedicoConsulta;
use App\Models\paciente;
use App\Models\registarConsulta;
use App\repositorios\consulta\contratos\consultaInterface;
use Illuminate\Http\Request;

class consultasController extends Controller
{
    public $model;
    public function __construct(consultaInterface $model)
    {
      $this->model=$model; 
    }
    
    public function index()
    {
        $consultas=$this->model->getList();
        return view('layouts.consultas.consultas', compact('consultas'));
    }

    
    public function create()
    {
        $pacientes = paciente::all();
        $medicos = disponibMedicoConsulta::all();
        
        return view('layouts.consultas.formConsultas', compact('pacientes', 'medicos'));
    }

    
    public function store(registarConsultaRequest $request)
    {
        //
        $cmarc=$this->model->create($request->all());
        //$consultas=$this->model->getList();
        //return view('layouts.consultas.consultas', compact('consultas'));
        return redirect()->back()->with('alert', 'Registo de consulta adecionado com sucesso!');
    }

    
    public function info($id, $paciente)
    {
        //
        $info=disponibMedicoConsulta::find($id);
        return view('layouts.consultas.infoConsult', compact('info', 'paciente'));
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
