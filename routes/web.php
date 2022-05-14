<?php

use App\Http\Controllers\especialidadeControlle;
use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\MedicoController;
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
});

