@extends('layouts.app')

@section('title', 'Paciente')

@section('content')
       
        {{-- Titulo da pagina --}}
        <div class="app-title">  
            <div>
            <h1><i class="fa fa-dashboard"></i> Pacientes</h1>
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
                Solicitar consulta
            </div>
            <div class="card-body">
                    
                        <div class="d-flex justify-content-center">
                            <div class="row">
                                <form action="" method="post">
                                    @csrf
                                    <input type="text" value="{{ Auth()->user()->name }}" hidden>
                                    <button class="btn btn-primary">
                                        <i class="fa fa-check"></i>
                                        Click para
                                        Solicitar consulta
                                    </button>
                                </form>
                            </div>
                        </div>
            </div>
        </div>
       

@endsection