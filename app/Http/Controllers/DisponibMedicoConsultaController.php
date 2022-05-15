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
        $userId=Auth()->user()->id;
        dd($m = $userId->userMedico());
        return view('layouts.medicoUser.disponibilidadeMedica');
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
