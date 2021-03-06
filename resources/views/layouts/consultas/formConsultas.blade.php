@extends('layouts.app')

@section('title', 'Mostra Consultas')

@section('content')
       
        {{-- Titulo da pagina --}}
        <div class="app-title">  
            <div>
            <h1><i class="fa fa-dashboard"></i> Marcação de consultas</h1>
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
            <div class="card-header">Marque consultas</div>
           
            <div class="card-body">
               @include('includes.alertas')
               @include('includes.includeConsultas.formConsulta')
            </div>
        </div>

@endsection