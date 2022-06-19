@extends('layouts.app')

@section('title', 'Relatório')

@section('content')
       
        {{-- Titulo da pagina --}}
        <div class="app-title">  
            <div>
            <h1><i class="fa fa-dashboard"></i> Relatórios</h1>
            <p>Centro de Saúde - Rio Capitão</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Panel de relatorio</a></li>
            </ul>
        </div>
        {{-- ========================================================================================================= --}}
        
        {{-- Corpo da pagina --}}
        <div class="card">
            <div class="card-header">
               Relatório
            </div>
            <div class="card-body">
                <div class="row texte-center">
                    
                    <div class="form-group col-12">
                        <a href="{{ route('printRelatorioPDF') }}">
                            <div class="card bg-success py-2 text-light text-center">
                                Relatório <i class="fa fa-file-pdf"></i>
                            </div>
                        </a>
                    </div>

                    <div class="form-group col-6">

                            <div class="tile">
                                <h3 class="tile-title">Consultas</h3>
                                <div class="embed-responsive embed-responsive-16by9">
                                  <canvas class="embed-responsive-item" id="barChartDemo"></canvas>
                                </div>
                            </div>

                    </div>

                    <div class="form-group col-6">

                        <div class="tile">
                            <h3 class="tile-title">Radar de internamentos</h3>
                            <div class="embed-responsive embed-responsive-16by9">
                              <canvas class="embed-responsive-item" id="radarChartDemo"></canvas>
                            </div>
                          </div>

                </div>

                </div>
            </div>
        </div>

@endsection

