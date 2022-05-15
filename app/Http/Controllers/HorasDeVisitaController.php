<?php

namespace App\Http\Controllers;

use App\Http\Requests\horaVisitaRequest;
use App\Models\horasDeVisita;
use App\repositorios\horaVisita\contratos\horaVisitaInterface;


class HorasDeVisitaController extends Controller
{
    protected $model;
    public function __construct(horaVisitaInterface $esp)
    {
        $this->model = $esp;
    }
    
    public function index()
    {
      //
      $horas = $this->model->getList();
      return view('layouts.horasVisita.horaVisita', compact('horas'));  
    }

    public function create()
    {
    
       return view('layouts.horasVisita.formHoraVisita'); 
    }

    public function store(horaVisitaRequest $request)
    {   
       
        $horaVis=horasDeVisita::where('hora_visita', $request->hora_visita)->where('dia_visita', $request->dia_visita)->where('periodo', $request->periodo)->get();
        $total=$horaVis->count();
        if($total==0){
            $this->model->create($request->all());
            return redirect()->route('horaVisitaList');
        }
        $sms='Essa hora de visita já está marcada no sistema';
        return view('layouts.horasVisita.formHoraVisita', compact('sms'));
         
    
    }

    public function edit($id)
    {
        //
        $hora=$this->model->get($id);
        return view('layouts.horaVisita.editHotaVisirta', compact('hora'));

    }

    public function update(horaVisitaRequest $request, $id)
    {
        
        $up = $this->model->get($id)->update($request->all());
       
        if(!$up){
            return redirect()->back();
        }
        return redirect()->route('horaVisitaList');
    }

    public function destroy($id)
    {   if($id)
           $horaDelete=$this->model->get($id);
           return view('layouts.horasVisita.formAlertas', compact('horaDelete'));
    }

    public function deletar($id)
    {
            $this->model->deletar($id);
            return redirect()->route('horaVisitaList');
   
    }
}
