@extends('layouts.app')

@section('title', 'Internamentos')

@section('content')
       
        {{-- Titulo da pagina --}}
        <div class="app-title">  
            <div>
            <h1><i class="fa fa-dashboard"></i> Internamentos</h1>
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
                Detalhes do internamento
            </div>
            <div class="card-body">
                @include('includes.alertas')
                <form method="post" action="{{ route('addInternamento') }}">
                        @include('includes.includeInternamento.detalheInternamento')
                </form>
            </div>
        </div>
       

@endsection