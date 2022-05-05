<?php

use App\Http\Controllers\homeController;
use App\Http\Controllers\loginController;
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
Route::middleware(['middleware'=>'admin'])->group(function(){

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



});


// Grupo de Route para Medico
Route::middleware(['middleware'=>'medico'])->group(function(){


    
});


// Grupo de Route para Paciente
Route::middleware(['middleware'=>'paciente'])->group(function(){

    
});
