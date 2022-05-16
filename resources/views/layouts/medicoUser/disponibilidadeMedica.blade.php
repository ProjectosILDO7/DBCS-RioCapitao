@extends('layouts.app')

@section('title', 'Mostra Disponibilidade')

@section('content')
       
        {{-- Titulo da pagina --}}
        <div class="app-title">  
            <div>
            <h1><i class="fa fa-dashboard"></i> Disponibilidade médica</h1>
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
            <div class="card-header">Marque sua disponibilidade de consulta</div>
            <div class="card-body">
                <form method="post" action="">
                    <div class="row">
                    
                        <div class="form-group col-3">
                            <label class="text-secondary">Data de disponibilidade de consulta</label>
                            <input type="date" class="form-control" name="data">
                        </div>

                        <div class="form-group col-3">
                            <label class="text-secondary">Hora inicial</label>
                            <input type="time" class="form-control" name="hora_inicial">
                        </div>

                        <div class="form-group col-3">
                            <label class="text-secondary">Hora final</label>
                            <input type="time" class="form-control" name="hora_final">
                        </div>
                        
                        <div class="form-group col-3">
                            <label class="text-secondary">Marcar para especialidades de:</label>
                            <select class="form-control" name="especialidade" id="">
                                @foreach ($especialidades as $p)
                                    <option>{{ $p->nome_especialidade }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-3">
                            <button class="btn btn-primary"><i class="fa fa-check"></i> Marcar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

@endsection