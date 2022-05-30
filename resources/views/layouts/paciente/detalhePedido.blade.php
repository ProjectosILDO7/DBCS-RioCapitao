@extends('layouts.app')

@section('title', 'Pacientes')

@section('content')
       
        {{-- Titulo da pagina --}}
        <div class="app-title">  
            <div>
            <h1><i class="fa fa-dashboard"></i> Pacientes -> Pedido</h1>
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
                Detalhes do pedido
            </div>
            <div class="card-body">
                <div class="row">
                        <div class="form-group col-4">
                            <label for="nome"><b> Paciente: </b> <span class="text-primary font-weight-bold">{{ $detalhePac->nome }}</span></label>
                            <ul>
                                <li><b>Endereço:</b> {{ $detalhePac->endereco }}</li>
                                <li><b>Telemóvel:</b> {{ $detalhePac->telemovel }}</li>
                                <li><b>E-mail:</b> {{ $detalhePac->email }}</li>
                            </ul>

                            <form action="{{ route('apagarPedido', $detalhePac->id) }}" method="post">
                                @csrf
                                <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Apagar pedido</button>
                            </form>
                        </div>
                   
                </div>
            </div>
        </div>
       

@endsection