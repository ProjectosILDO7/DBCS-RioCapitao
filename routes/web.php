<?php

use App\Http\Controllers\consultasController;
use App\Http\Controllers\ControllerPDF;
use App\Http\Controllers\DisponibMedicoConsultaController;
use App\Http\Controllers\especialidadeControlle;
use App\Http\Controllers\homeController;
use App\Http\Controllers\HorasDeVisitaController;
use App\Http\Controllers\estatisticasController;
use App\Http\Controllers\internamentosController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\QuartoDeInternamentoController;
use App\Http\Controllers\statusRelatorioController;
use App\Models\disponibMedicoConsulta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route Inicial
Route::get('/', function () {
    return view('login');
})->name('login');

Route::post('/logar', [loginController::class, 'logar'])->name('logar.admin');
Route::get('/form', [loginController::class, 'form'])->name('logar.form');


// Grupo de Route para administrador
Route::middleware(['middleware'=>'auth'])->group(function(){

    //Route de executar o logout
    Route::get('/logout', function(){
        Auth::logout();
        return redirect()->route('logar.form');

    })->name('login.sair');
    
    //routa pagina inicial
    route::get('home', function(){
        return view('layouts.index');
    })->name('home.admin');

    //configuracao de pagina
    Route::get('/page-user', [homeController::class, 'index'])->name('page-user');
    Route::put('/def_perfil/{id}', [homeController::class, 'update'])->name('salvar.perfil');
    
    //Especialidade
    //==================================================================================================
    Route::get('/especialidade', [especialidadeControlle::class, 'index'])->name('user.especialidade')->middleware('admin');
    Route::get('/formEspecialidade', [especialidadeControlle::class, 'create'])->name('user.addEspec')->middleware('admin');
    Route::post('/addEspecialidade', [especialidadeControlle::class, 'store'])->name('user.addEspecialidade')->middleware('admin');
    Route::get('/editEspeci/{id}', [especialidadeControlle::class, 'edit'])->name('user.editEspec')->middleware('admin');
    Route::put('/updateEspecialidade/{id}', [especialidadeControlle::class, 'update'])->name('updateEspec')->middleware('admin');
    Route::get('/delecteEspecialidade/{id}', [especialidadeControlle::class, 'destroy'])->name('delete.espec')->middleware('admin');
    Route::post('/apagarEsp/{id}', [especialidadeControlle::class, 'deletar'])->name('apagarEsp')->middleware('admin');
    //Medicos
    //medicoEdit
    //medicoDelete
    //medicoInfo
    //===================================================================================================
    Route::get('/medicoList', [MedicoController::class, 'index'])->name('medicoList')->middleware('admin');
    Route::get('/formMedico', [MedicoController::class, 'create'])->name('addMedico')->middleware('admin');  
    Route::post('/addMedico', [MedicoController::class, 'store'])->name('medico.addMedico')->middleware('admin');  
    Route::get('/editMedico/{id}', [MedicoController::class, 'edit'])->name('medicoEdit')->middleware('admin');
    Route::put('/updateMedico/{id}', [MedicoController::class, 'update'])->name('updateMedico')->middleware('admin');
    Route::get('/deleteMedico/{id}', [MedicoController::class, 'destroy'])->name('medicoDelete')->middleware('admin');
    Route::post('/apagarMedic/{id}', [MedicoController::class, 'deletar'])->name('apagarMed')->middleware('admin');
    Route::get('/apagarMedic/{id}', [MedicoController::class, 'infoMedico'])->name('medicoInfo')->middleware('admin');
    
    //Pacientes
    //===================================================================================================
    Route::get('/pacienteList', [PacienteController::class, 'index'])->name('pacienteList')->middleware('admin');
    Route::get('/formPaciente', [PacienteController::class, 'create'])->name('addPaciente')->middleware('admin');  
    Route::post('/addPaciente', [PacienteController::class, 'store'])->name('paciente.addPaciente')->middleware('admin');  
    Route::get('/editPaciente/{id}', [PacienteController::class, 'edit'])->name('pacienteEdit')->middleware('admin');
    Route::put('/updatePaciente/{id}', [PacienteController::class, 'update'])->name('updatePaciente')->middleware('admin');
    Route::get('/deletePaciente/{id}', [PacienteController::class, 'destroy'])->name('pacienteDelete')->middleware('admin');
    Route::post('/apagarPaciente/{id}', [PacienteController::class, 'deletar'])->name('apagarPaciente')->middleware('admin');

    //Quartos para internamento
    //===================================================================================================
    Route::get('/quartoList', [QuartoDeInternamentoController::class, 'index'])->name('quartoList')->middleware('admin');
    Route::get('/formQuarto', [QuartoDeInternamentoController::class, 'create'])->name('addQuarto')->middleware('admin');  
    Route::post('/addQuarto', [QuartoDeInternamentoController::class, 'store'])->name('quarto.addQuarto')->middleware('admin');  
    Route::get('/editQuarto/{id}', [QuartoDeInternamentoController::class, 'edit'])->name('quartoEdit')->middleware('admin');
    Route::put('/updateQuarto/{id}', [QuartoDeInternamentoController::class, 'update'])->name('updateQuarto')->middleware('admin');
    Route::get('/deletequarto/{id}', [QuartoDeInternamentoController::class, 'destroy'])->name('quartoDelete')->middleware('admin');
    Route::post('/apagarquarto/{id}', [QuartoDeInternamentoController::class, 'deletar'])->name('apagarQuarto')->middleware('admin');

    //Horas de visita
    //===================================================================================================
    Route::get('/horaList', [HorasDeVisitaController::class, 'index'])->name('horaVisitaList')->middleware('admin');
    Route::get('/formhora', [HorasDeVisitaController::class, 'create'])->name('addHoraVisita')->middleware('admin');  
    Route::post('/addhora', [HorasDeVisitaController::class, 'store'])->name('horaVisita.addHoraVisita')->middleware('admin');  
    Route::get('/edithora/{id}', [HorasDeVisitaController::class, 'edit'])->name('horaVisitaEdit')->middleware('admin');
    Route::put('/updatehora/{id}', [HorasDeVisitaController::class, 'update'])->name('updatehoraVisita')->middleware('admin');
    Route::get('/deletehora/{id}', [HorasDeVisitaController::class, 'destroy'])->name('horaVisitaDelete')->middleware('admin');
    Route::post('/apagarhora/{id}', [HorasDeVisitaController::class, 'deletar'])->name('apagarHoraVisita')->middleware('admin');
    Route::post('/horaVisitaInfo/{id}', [HorasDeVisitaController::class, 'infoVisita'])->name('horaVisitaInfo')->middleware('admin');

    //Routas para medico
    //===============================================================================================================================
    Route::get('/mostraDisponibilidade', [DisponibMedicoConsultaController::class, 'index'])->name('mostraDisponibilidade')->middleware('medico');
    Route::get('/dDeleteConfim/{id}', [DisponibMedicoConsultaController::class, 'confirmDelete'])->name('dDeleteConfirm')->middleware('medico');
    Route::get('/marcarDisponib', [DisponibMedicoConsultaController::class, 'create'])->name('formDisponibilidade')->middleware('medico');
    Route::post('/addDisponibilidade', [DisponibMedicoConsultaController::class, 'store'])->name('addDisponibilidade')->middleware('medico');
    Route::post('/delDisponib/{id}', [DisponibMedicoConsultaController::class, 'destroy'])->name('dDelete')->middleware('medico');
    Route::get('/verMeusPacientes', [DisponibMedicoConsultaController::class, 'meusPacientes'])->name('meusPacientes')->middleware('medico');
    Route::get('/prescMedica/{paciente}', [DisponibMedicoConsultaController::class, 'prescricao'])->name('prescMedica')->middleware('medico');
    Route::post('/postPrescricaoMedica', [DisponibMedicoConsultaController::class, 'savePrescricao'])->name('postPrescricao')->middleware('medico');
    Route::get('/verPrescricaoMedica/{ver}', [DisponibMedicoConsultaController::class, 'verPresc'])->name('prescMedicaVer')->middleware('medico');


    //consultas
    Route::get('/listaDeConsultas', [consultasController::class, 'index'])->name('listConsulta')->middleware('admin');;
    Route::get('/marcarCons', [consultasController::class, 'create'])->name('formConsulta')->middleware('admin');
    Route::post('/registaCOnsul', [consultasController::class, 'store'])->name('registarConsulta')->middleware('admin');
    Route::get('/statusCons/{id}/{nome}', [consultasController::class, 'info'])->name('statusConsulta')->middleware('admin');

    //Internamento
    Route::get('/internamentos', [internamentosController::class, 'create'])->name('internamentos')->middleware('admin');
    Route::post('/inserInternamento', [internamentosController::class, 'store'])->name('addInternamento')->middleware('admin');
    Route::get('/actividadeMedica', [DisponibMedicoConsultaController::class, 'activMedicas'])->name('actividadeMedicas');
    
    Route::get('/statusInternamento/{id}', [internamentosController::class, 'show'])->name('statusInternamento')->middleware('admin');

    //paciente
    Route::get('/pedioConsulta', [PacienteController::class, 'pedido'])->name('pedioConsulta');
    Route::get('/pedioConsultaList', [PacienteController::class, 'listarPedido'])->name('pedioConsultaGetList');
    Route::post('/pedioConsulta', [PacienteController::class, 'pedidoConsulta'])->name('solicitaConsulta');

    //contar
    Route::get('/totalConsulta', [estatisticasController::class, 'totalSolitacaoConsulta'])->middleware('admin');
    Route::get('/totalRegistarConsulta', [estatisticasController::class, 'totalRegistarConsulta'])->middleware('admin');
    Route::get('detalhesPedidos/{id}', [pacienteController::class, 'detPedido'])->name('detalhesPedido')->middleware('admin');
    Route::post('/apagarPedido/{id}', [PacienteController::class, 'deletarPedido'])->name('apagarPedido')->middleware('admin');

    //printRelatorio
    Route::get('/printRelatorio', [statusRelatorioController::class, 'index'])->name('printRelatorio')->middleware('admin');
    Route::get('/imprimirRelatorio', [ControllerPDF::class, 'index'])->name('printRelatorioPDF')->middleware('admin');
    
});

