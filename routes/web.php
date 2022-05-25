<?php

use App\Http\Controllers\consultasController;
use App\Http\Controllers\DisponibMedicoConsultaController;
use App\Http\Controllers\especialidadeControlle;
use App\Http\Controllers\homeController;
use App\Http\Controllers\HorasDeVisitaController;
use App\Http\Controllers\internamentosController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\MedicoController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\QuartoDeInternamentoController;
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
    Route::get('/page-user', [homeController::class, 'definPage'])->name('page-user');
    Route::put('/def_perfil/{id}', [homeController::class, 'update'])->name('salvar.perfil');
    
    //Especialidade
    //==================================================================================================
    Route::get('/especialidade', [especialidadeControlle::class, 'index'])->name('user.especialidade');
    Route::get('/formEspecialidade', [especialidadeControlle::class, 'create'])->name('user.addEspec');
    Route::post('/addEspecialidade', [especialidadeControlle::class, 'store'])->name('user.addEspecialidade');
    Route::get('/editEspeci/{id}', [especialidadeControlle::class, 'edit'])->name('user.editEspec');
    Route::put('/updateEspecialidade/{id}', [especialidadeControlle::class, 'update'])->name('updateEspec');
    Route::get('/delecteEspecialidade/{id}', [especialidadeControlle::class, 'destroy'])->name('delete.espec');
    Route::post('/apagarEsp/{id}', [especialidadeControlle::class, 'deletar'])->name('apagarEsp');
    //Medicos
    //medicoEdit
    //medicoDelete
    //medicoInfo
    //===================================================================================================
    Route::get('/medicoList', [MedicoController::class, 'index'])->name('medicoList');
    Route::get('/formMedico', [MedicoController::class, 'create'])->name('addMedico');  
    Route::post('/addMedico', [MedicoController::class, 'store'])->name('medico.addMedico');  
    Route::get('/editMedico/{id}', [MedicoController::class, 'edit'])->name('medicoEdit');
    Route::put('/updateMedico/{id}', [MedicoController::class, 'update'])->name('updateMedico');
    Route::get('/deleteMedico/{id}', [MedicoController::class, 'destroy'])->name('medicoDelete');
    Route::post('/apagarMedic/{id}', [MedicoController::class, 'deletar'])->name('apagarMed');
    Route::get('/apagarMedic/{id}', [MedicoController::class, 'infoMedico'])->name('medicoInfo');
    
    //Pacientes
    //===================================================================================================
    Route::get('/pacienteList', [PacienteController::class, 'index'])->name('pacienteList');
    Route::get('/formPaciente', [PacienteController::class, 'create'])->name('addPaciente');  
    Route::post('/addPaciente', [PacienteController::class, 'store'])->name('paciente.addPaciente');  
    Route::get('/editPaciente/{id}', [PacienteController::class, 'edit'])->name('pacienteEdit');
    Route::put('/updatePaciente/{id}', [PacienteController::class, 'update'])->name('updatePaciente');
    Route::get('/deletePaciente/{id}', [PacienteController::class, 'destroy'])->name('pacienteDelete');
    Route::post('/apagarPaciente/{id}', [PacienteController::class, 'deletar'])->name('apagarPaciente');

    //Quartos para internamento
    //===================================================================================================
    Route::get('/quartoList', [QuartoDeInternamentoController::class, 'index'])->name('quartoList');
    Route::get('/formQuarto', [QuartoDeInternamentoController::class, 'create'])->name('addQuarto');  
    Route::post('/addQuarto', [QuartoDeInternamentoController::class, 'store'])->name('quarto.addQuarto');  
    Route::get('/editQuarto/{id}', [QuartoDeInternamentoController::class, 'edit'])->name('quartoEdit');
    Route::put('/updateQuarto/{id}', [QuartoDeInternamentoController::class, 'update'])->name('updateQuarto');
    Route::get('/deletequarto/{id}', [QuartoDeInternamentoController::class, 'destroy'])->name('quartoDelete');
    Route::post('/apagarquarto/{id}', [QuartoDeInternamentoController::class, 'deletar'])->name('apagarQuarto');

    //Horas de visita
    //===================================================================================================
    Route::get('/horaList', [HorasDeVisitaController::class, 'index'])->name('horaVisitaList');
    Route::get('/formhora', [HorasDeVisitaController::class, 'create'])->name('addHoraVisita');  
    Route::post('/addhora', [HorasDeVisitaController::class, 'store'])->name('horaVisita.addHoraVisita');  
    Route::get('/edithora/{id}', [HorasDeVisitaController::class, 'edit'])->name('horaVisitaEdit');
    Route::put('/updatehora/{id}', [HorasDeVisitaController::class, 'update'])->name('updatehoraVisita');
    Route::get('/deletehora/{id}', [HorasDeVisitaController::class, 'destroy'])->name('horaVisitaDelete');
    Route::post('/apagarhora/{id}', [HorasDeVisitaController::class, 'deletar'])->name('apagarHoraVisita');
    Route::post('/horaVisitaInfo/{id}', [HorasDeVisitaController::class, 'infoVisita'])->name('horaVisitaInfo');

    //Routas para medico
    //===============================================================================================================================
    Route::get('/mostraDisponibilidade', [DisponibMedicoConsultaController::class, 'index'])->name('mostraDisponibilidade');
    Route::get('/dDeleteConfim/{id}', [DisponibMedicoConsultaController::class, 'confirmDelete'])->name('dDeleteConfirm');
    Route::get('/marcarDisponib', [DisponibMedicoConsultaController::class, 'create'])->name('formDisponibilidade');
    Route::post('/addDisponibilidade', [DisponibMedicoConsultaController::class, 'store'])->name('addDisponibilidade');
    Route::post('/delDisponib/{id}', [DisponibMedicoConsultaController::class, 'destroy'])->name('dDelete');
    Route::get('/infoDisponib/{id}', [DisponibMedicoConsultaController::class, 'infoDisponibilidade'])->name('dInfo');

    //consultas
    Route::get('/listaDeConsultas', [consultasController::class, 'index'])->name('listConsulta');
    Route::get('/marcarCons', [consultasController::class, 'create'])->name('formConsulta');
    Route::post('/registaCOnsul', [consultasController::class, 'store'])->name('registarConsulta');
    Route::get('/statusCons/{id}/{nome}', [consultasController::class, 'info'])->name('statusConsulta');

    //Internamento
    Route::get('/internamentos', [internamentosController::class, 'index'])->name('internamentos');
});

