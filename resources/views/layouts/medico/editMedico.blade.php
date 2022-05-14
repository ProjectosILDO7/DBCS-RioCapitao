@extends('layouts.app')

@section('title', 'Editar Especialidade')

@section('content')
       
        {{-- Titulo da pagina --}}
        <div class="app-title">  
            <div>
            <h1><i class="fa fa-dashboard"></i> Editar specialidades</h1>
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
                Editar especialidade
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('updateMedico', $medico->id ?? Null) }}">
                        @method('put')
                        @include('includes.includeMedico.formMedico')
                </form>
            </div>
        </div>
        
@endsection