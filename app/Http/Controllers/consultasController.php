<?php

namespace App\Http\Controllers;

use App\Models\disponibMedicoConsulta;
use App\Models\medico;
use App\Models\paciente;
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
        $consulta=$this->model->getList();
        return view('layouts.consultas.consultas', compact('consulta'));
    }

    
    public function create()
    {
        $pacientes = paciente::all();
        $medicos = disponibMedicoConsulta::all();

        return view('layouts.consultas.formConsultas', compact('pacientes', 'medicos'));
    }

    
    public function store(Request $request)
    {
        //
        dd($request->all());
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
