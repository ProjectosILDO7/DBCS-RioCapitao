@extends('layouts.app')

@section('title', 'Prescrição Médica')

@section('content')
       
        {{-- Titulo da pagina --}}
        <div class="app-title">  
            <div>
            <h1><i class="fa fa-dashboard"></i>Prescrição médica</h1>
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
                Meu paciente
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-3">
                        <span class="font-weight-bold text-secondary">Nome: </span><span class="font-weight-bold text-danger">{{ $paciente->nome }}</span>
                    </div>

                    <div class="form-group col-3">
                        <span class="font-weight-bold text-secondary">Data de nascimento: </span>{{ $dataNasc }}
                    </div>

                    <div class="form-group col-3">
                        <span class="font-weight-bold text-secondary">Gênero: </span>{{ $paciente->genero }}
                    </div>

                    <div class="form-group col-3">
                        <span class="font-weight-bold text-secondary">Contácto: </span>{{ $paciente->telemovel }}
                    </div>
                </div>

                @include('includes.alertas') 

                <form action="{{ route('postPrescricao') }}" method="post">
                    @csrf
                    <input type="text" hidden name="paciente" value="{{ $paciente->nome }}">
                    @error('paciente')
                        <span class="small text-danger">{{ $message }}</span>
                    @enderror
                    <input type="text" hidden name="data_nasc" value="{{ $dataNasc }}">
                    <input type="text" hidden name="genero" value="{{ $paciente->genero }}">
                    <input type="text" hidden name="telemovel" value="{{ $paciente->telemovel }}">
                    <input type="text" hidden name="endereco" value="{{ $paciente->endereco }}">
                    <textarea class="form-control form-control-sm" name="presc_medica" id="" cols="30" rows="10" placeholder="Diagnóstico"></textarea>
                    @error('presc_medica')
                        <span class="small text-danger">{{ $message }}</span>
                    @enderror
                    <p class="content-justify-end"><button type="submit" class="btn btn-sm btn-primary mt-2"><i class="fa fa-save"></i> Salvar</button></p>
                </form>
            </div>
        </div>
       

@endsection