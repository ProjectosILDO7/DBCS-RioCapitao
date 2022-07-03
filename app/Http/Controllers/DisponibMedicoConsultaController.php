<?php

namespace App\Http\Controllers;

use App\Http\Requests\disponibilidadeMedicaConsultRequest;
use App\Http\Requests\prescricaoMedicaRequest;
use App\Models\disponibMedicoConsulta;
use App\Models\medico;
use App\Models\paciente;
use App\Models\prescricaoMedica;
use App\Models\registarConsulta;
use App\Models\User;
use App\repositorios\disponibilidadeConsulta\contratos\disponibilidadeInterface;
use Carbon\Carbon;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class DisponibMedicoConsultaController extends Controller
{
    protected $model;
    public function __construct(disponibilidadeInterface $medico)
    {
        $this->model=$medico;
    }
    
    public function index()
    {
        $userId= new User();
        $idUser = Auth()->user()->id;

        $m = $userId->find($idUser);
        $medicoId=$m->userMedico->id;
        $medico=$m->userMedico->nome;
        //instanciar o medel medico
        $medicoEsp=medico::findOrFail($medicoId);
        $dispo = disponibMedicoConsulta::where('medico_id', $medicoId)->get();

        $especialidades = $medicoEsp->especialidades;
        return view('layouts.medicoUser.disponibilidadeMedica', compact( 'dispo', 'especialidades', 'medicoEsp', 'medicoId', 'medico'));
    }

    
    public function create()
    {
        $userId= new User();
        $idUser = Auth()->user()->id;

        $m = $userId->find($idUser);
        $medicoId=$m->userMedico->id;
        $medico=$m->userMedico->nome;
        //instanciar o medel medico
        $medicoEsp=medico::findOrFail($medicoId);
        $dispo = disponibMedicoConsulta::where('medico_id', $medicoId)->get();

        $especialidades = $medicoEsp->especialidades;
        return view('layouts.medicoUser.formDispo', compact( 'dispo', 'especialidades', 'medicoEsp', 'medicoId', 'medico'));
    }

    
    public function store(disponibilidadeMedicaConsultRequest $request)
    {
        //
        $disp = $this->model->create($request->all());
        if($disp){
            return redirect()->back()->with('alert', 'Disponibilidade salvo com sucesso!');
        }

    }

    
    public function infoDisponibilidade(disponibMedicoConsulta $disponibMedicoConsulta)
    {
        //
    }

    public function meusPacientes(){
        $idUser=Auth()->user()->id;
        $medicoID=medico::where('user_id', $idUser)->first();
        $idMedico=$medicoID->id;
        $meusPacientes=registarConsulta::where('disponib_medica_id', $idMedico)->get();
        return view('layouts.medico.pacientesMedicos', compact('meusPacientes'));
    }

    
    public function edit(disponibMedicoConsulta $disponibMedicoConsulta)
    {
        //
    }

    public function prescricao($paciente){
        $paciente = paciente::where('nome', $paciente)->first();
        $dataNasc=Carbon::parse($paciente->data_nasc)->format("d-m-Y");
        return view('layouts.medico.prescricao', compact('paciente', 'dataNasc'));
    }

    public function savePrescricao(prescricaoMedicaRequest $request){
        
        prescricaoMedica::create($request->all());
        return redirect()->back()->with('alert', 'Diagnóstico salvo com sucesso!');
    }

    public function verPresc($paciente){
        $detalhesPrescricao=prescricaoMedica::where('paciente', $paciente)->first();

        $dataDaPrescricao=Carbon::parse($detalhesPrescricao->created_at)->format("d-m-Y H:i:s");
        $pdf = PDF::loadView('/layouts.relatorio.detalhesPrescricaoMedica', compact('detalhesPrescricao', 'dataDaPrescricao'));
        return $pdf->stream('prescriçãoMedica.pdf');
    }

   
    public function update(Request $request, disponibMedicoConsulta $disponibMedicoConsulta)
    {
        //
    }

    

    public function confirmDelete($id)
    {
        $disponibilidade=$this->model->get($id);
        return view('layouts.medicoUser.formAlert', compact('disponibilidade'));
        //$d = $this->model->deletar($id);
    }

    public function destroy($id)
    {
        //
        $del=$this->model->deletar($id);
        if($del){
            return redirect()->route('mostraDisponibilidade');
        }

    }

    //actividades medicas
    public function activMedicas(){
        $medicos = $this->model->getList();
        return view('layouts.actividadesMedicas.actividadeMedica', compact('medicos'));
    }
}
