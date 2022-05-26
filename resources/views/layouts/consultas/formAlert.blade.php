@extends('layouts.app')

@section('title', 'Apagar')

@section('content')
       
        {{-- Titulo da pagina --}}
        <div class="app-title">  
            <div>
            <h1><i class="fa fa-dashboard"></i> Apagar!</h1>
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
            <div class="card-header">Tens a certeza que desejas apagar esta disponibilidade: <span class="font-weight-bold">{{ $disponibilidade->data_dispon }}</span></div>
            <div class="card-body">
                @include('includes.alertas')
                <form action="{{ route('dDelete', $disponibilidade->id) }}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-12 text-center">
                           <span class="text-primary">Uma vez apagada não terá como reverter essa imformação, somente realizar um novo cadastro</span>
                        </div>

                        <div class="form-group col-6">
                           <button class="btn btn-block btn-sm btn-danger text-center"><i class="fa fa-trash"></i> APAGAR</button>
                        </div>

                        <div class="form-group col-6">
                            <a class="btn btn-block btn-primary btn-sm text-center" href="{{ route('mostraDisponibilidade') }}" dismiss><i class="fa fa-close"> Cancelar</i></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>

@endsection