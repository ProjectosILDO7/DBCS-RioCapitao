@extends('layouts.app')

@section('title', 'Especialidade')

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
                Detalhes de : <span class="font-weight-bold">{{ $info->nome }}</span>
            </div>
            <div class="card-body">

                <span>Especialidade:</span>
                <ul>
                    @foreach ($info->especialidades as $ep)
                        
                    @endforeach
                    <li>{{ $ep->nome_especialidade }}</li>
                </ul>
                
            </div>
        </div>
       

@endsection