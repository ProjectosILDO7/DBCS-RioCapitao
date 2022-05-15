@extends('layouts.app')

@section('title', 'Horas de visita')

@section('content')
       
        {{-- Titulo da pagina --}}
        <div class="app-title">  
            <div>
            <h1><i class="fa fa-dashboard"></i> Horas de visita</h1>
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
                Horas de visita
            </div>
            <div class="card-body">
                <span class="text-danger">{{ $sms ?? '' }}</span>
                <form method="post" action="{{ route('horaVisita.addHoraVisita') }}">
                        @include('includes.includeHoraVisita.formHoraVisita')
                </form>
            </div>
        </div>
       

@endsection