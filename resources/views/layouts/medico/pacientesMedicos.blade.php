@extends('layouts.app')

@section('title', 'Especialidade')

@section('content')
       
        {{-- Titulo da pagina --}}
        <div class="app-title">  
            <div>
            <h1><i class="fa fa-dashboard"></i> Meus pacientes</h1>
            <p>Centro de Saúde - Rio Capitão</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Panel de controle</a></li>
            </ul>
        </div>
        {{-- ========================================================================================================= --}}
        
        {{-- Corpo da pagina --}}
        <div class="card">
            <div class="card-header">
                Meus pacientes
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-sm table-hover table-bordered" id="sampleTable">
                        <thead>
                          <tr>
                            <th>Nº</th>
                            <th>Meus pacientes</th>
                            <th>Opções</th>
                          </tr>
                        </thead>
        
                        <tbody>
                       
                        @foreach($meusPacientes as $p)
                          <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $p->paciente }}</td>
                            <td>
                              <a href="{{ route('prescMedica', $p->paciente) }}">Prescrição médica</a>
                              <a href="{{ route('prescMedicaVer', $p->paciente) }}" class="ml-4"><i class="fa fa-file-pdf text-danger"></i></a>
                            </td>
                          </tr>
                        @endforeach
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
       

@endsection