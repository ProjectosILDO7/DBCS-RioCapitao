@extends('layouts.app')

@section('title', 'Quartos')

@section('content')
       
        {{-- Titulo da pagina --}}
        <div class="app-title">  
            <div>
            <h1><i class="fa fa-dashboard"></i> Detalhes </h1>
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
                Detalhes de : <span class="font-weight-bold">{{ $quarto->nome }}</span>
            </div>
            <div class="card-body">

                <span class="text-primary">Quarto:</span>
                <ul>
                    {{-- @foreach ($quarto->quartos as $ep)
                        <li>{{ $ep->nome_especialidade }}</li>
                    @endforeach --}}
                </ul>
                
            </div>
        </div>
       

@endsection