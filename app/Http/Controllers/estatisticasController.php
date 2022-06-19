<?php

namespace App\Http\Controllers;

use App\Models\consultaMarcada;
use App\Models\internamento;
use App\Models\medico;
use App\Models\paciente;
use App\Models\pedidoConsulta;
use App\Models\registarConsulta;
use Illuminate\Support\Facades\DB;

class estatisticasController extends Controller
{
   public function totalSolitacaoConsulta(){
       return $solicitacoes = pedidoConsulta::all()->count();
       
   } 

   public function totalMedicos(){
    return $solicitacoes = medico::all()->count();
    
   }

   public function totalPacientes(){
    return $solicitacoes = paciente::all()->count();
    
   }

   public function totalConsultas(){
    return $solicitacoes = consultaMarcada::all()->count();
    
   }

   public function totalInternamentos(){
    return $solicitacoes = internamento::all()->count();
    
   }

   public function totalRegistarConsulta(){
       $pacientes = registarConsulta::select(DB::raw('COUNT(*) as contar'))
                                ->whereYear('created_at', date('Y'))
                                ->groupBy(DB::raw("Month(created_at)"))
                                ->pluck('contar');
        $meses = registarConsulta::select(DB::raw("Month(created_at) as meses"))
                                ->whereYear('created_at', date('Y'))
                                ->groupBy(DB::raw("Month(created_at)"))
                                ->pluck('meses');
    
        $data = array(0,0,0,0,0,0,0,0,0,0,0,0);
        foreach($meses as $index=> $meses){
            $data[$meses-1] = $pacientes[$index];
        }
        return json_encode($data);
   }


   public function totalRegistoInternamento(){
    $pacientes = internamento::select(DB::raw('COUNT(*) as contar'))
                             ->whereYear('created_at', date('Y'))
                             ->groupBy(DB::raw("Month(created_at)"))
                             ->pluck('contar');
     $meses = internamento::select(DB::raw("Month(created_at) as meses"))
                             ->whereYear('created_at', date('Y'))
                             ->groupBy(DB::raw("Month(created_at)"))
                             ->pluck('meses');
 
     $data = array(0,0,0,0,0,0,0,0,0,0,0,0);
     foreach($meses as $index=> $meses){
         $data[$meses-1] = $pacientes[$index];
     }
     return json_encode($data);
}


}
