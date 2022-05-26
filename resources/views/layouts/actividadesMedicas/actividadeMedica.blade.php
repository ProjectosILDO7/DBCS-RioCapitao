@extends('layouts.app')

@section('title', 'Actividade medica')

@section('content')
       
        {{-- Titulo da pagina --}}
        <div class="app-title">  
            <div>
            <h1><i class="fa fa-dashboard"></i> Actividades Médicas</h1>
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
                Disponibilidades Médicas
            </div>
            @include('includes.alertas')
            <div class="card-body">
                @include('includes.includeActividadeMedica.actividadeMedicaList')
            </div>
        </div>
       

@endsection