@extends('layouts.app')

@section('title', 'Index')

@section('content')
       
        {{-- Titulo da pagina --}}
        <div class="app-title">  
            <div>
            <h1><i class="icon fa fa-cog"></i> Definições - Perfil</h1>
            <p>Centro de Saúde - Rio Capitão</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Perfil</a></li>
            </ul>
        </div>
        {{-- ========================================================================================================= --}}
        
        {{-- Corpo da pagina --}}
        <div class="contaner">
            <div class="card">
                <div class="card-header">Redefinir perfil</div>
                <div class="card-body">
                    @include('includes.alertas')

                      <div class="form-group col-12">
                           @include('includes.formUser')
                      </div>

                </div>
            </div>
        </div>
@endsection
      
    