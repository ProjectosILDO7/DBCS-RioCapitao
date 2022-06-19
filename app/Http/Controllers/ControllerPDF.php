<?php

namespace App\Http\Controllers;

use App\Models\especialidade;
use App\Models\internamento;
use App\Models\medico;
use App\Models\paciente;
use App\Models\quartoDeInternamento;
use App\Models\registarConsulta;
use App\Models\User;
use PDF;

class ControllerPDF extends Controller
{
    //
    public function index()
  {
    $medicos = medico::all();
    $paciente = paciente::all();
    $regConsulta = registarConsulta::all();
    $regDeInternamento = internamento::all();
    $especialidades = especialidade::all();
    $quartoIntern = quartoDeInternamento::all();

    $contaMedico = $medicos->count();
    $contaPaciente = $paciente->count();
    $contaConsultas = $regConsulta->count();
    $contaInternamento = $regDeInternamento->count();
    $userCount = User::where('admin', '1')->get()->count();

    $pdf = PDF::loadView('layouts.relatorio.relatorio', compact(
        'medicos',
        'contaMedico',
        'contaPaciente',
        'contaConsultas',
        'contaInternamento',
        'userCount',
        'quartoIntern',
        'especialidades',
    ));
    return $pdf->stream('relatorio.pdf');
  }
}
