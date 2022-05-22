@extends('layouts.app')

@section('title', 'Index')

@section('content')

        <div class="app-title">  
            <div>
            <h1><i class="fa fa-dashboard"></i> Painel de controle</h1>
            <p>Centro de Saúde - Rio Capitão</p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="#">Panel de controle</a></li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-6 col-lg-3">
            <div class="widget-small primary coloured-icon text-center"><i class="icon fa fa-user-md fa-3x"></i>
                <div class="info">
                <h4>Médicos</h4>
                <p><b>5</b></p>
                </div>
            </div>
            </div>

            <div class="col-md-6 col-lg-3">
            <div class="widget-small info coloured-icon text-center"><i class="icon fa fa-stethoscope fa-3x"></i>
                <div class="info">
                <h4>Consultas</h4>
                <p><b>25</b></p>
                </div>
            </div>
            </div>

            <div class="col-md-6 col-lg-3">
            <div class="widget-small warning coloured-icon text-center"><i class="icon fa fa-wheelchair fa-3x"></i>
                <div class="info">
                <h4>Pacientes</h4>
                <p><b>10</b></p>
                </div>
            </div>
            </div>
            <div class="col-md-6 col-lg-3">
            <div class="widget-small danger coloured-icon text-center"><i class="icon fa fa-heartbeat fa-3x"></i>
                <div class="info">
                <h4>U.T.I</h4>
                <p><b>500</b></p>
                </div>
            </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
            <div class="tile">
                <h3 class="tile-title">Consultas</h3>
                <div class="embed-responsive embed-responsive-16by9">

                <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
                
                </div>
            </div>
            </div>
            <div class="col-md-6">
            <div class="tile">
                <h3 class="tile-title">Tratamentos Intensivos</h3>
                <div class="embed-responsive embed-responsive-16by9">

                <canvas class="embed-responsive-item" id="pieChartDemo"></canvas>

                </div>
            </div>
            </div>
        </div>


@endsection