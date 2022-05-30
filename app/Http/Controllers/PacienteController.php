<?php

namespace App\Http\Controllers;

use App\Http\Requests\pacienteRequest;
use App\Http\Requests\pedidoRequest;
use App\Models\medico;
use App\Models\pedidoConsulta;
use App\Models\User;
use App\repositorios\paciente\contratos\pacienteInterface;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    
    protected $model;
    public function __construct(pacienteInterface $esp)
    {
        $this->model = $esp;
    }
    
    public function index()
    {
      //
      $pac = $this->model->getList();
      return view('layouts.paciente.paciente', compact('pac'));  
    }

    public function create()
    {
       $key=rand(300221,30112578);
       return view('layouts.paciente.formPaciente', compact('key', )); 
    }

    public function store(pacienteRequest $request)
    {   
        $key=bcrypt($request->password);
        $dataUser=User::create([
            'name' =>$request->nome,
            'email'=>$request->email,
            'admin'=>'3',
            'tel'=>$request->telemovel,
            'email_verified_at'=>now(),
            'password' => $key,
        ]);
        $userId = $dataUser->id;
        if(!$dataUser){
            return redirect()->back()->with('error', 'Erro ao salvar esses dados');
        }
        $data=$request->only('nome', 'data_nasc', 'genero', 'endereco', 'telemovel', 'email', 'status');
        $data['user_id']=$userId;
        $this->model->create($data);
        return redirect()->back()->with('alert', 'Paciente salvo com sucesso!'); 
    
    }

    public function edit($id)
    {
        //
        $paciente=$this->model->get($id);
        return view('layouts.paciente.editPaciente', compact('paciente'));

    }

    public function update(pacienteRequest $request, $id)
    {
        $idPacUser = $this->model->get($id)->user_id;
        $upUser = new User();
        $userPac = $upUser->find($idPacUser);
        $key = $upUser['password']=bcrypt($request->password);
        $userPac->update([
            'name'=>$request->nome,
            'email'=>$request->email,
            'admin' => '3',
            'tel'=>$request->telemovel,
            'email_verified_at'=>now(),
            'password'=>$key,
        ]);
        $up = $this->model->update($request->only('nome', 'data_nasc', 'genero', 'endereco', 'telemovel', 'email'), $id);
       
        if(!$up){
            return redirect()->back();
        }
        return redirect()->route('pacienteList');
    }

    public function destroy($id)
    {   if($id)
           $paciente=$this->model->get($id);
           return view('layouts.paciente.formAlertas', compact('paciente'));
    }

    public function deletar($id){

            $idPacUser = $this->model->get($id)->user_id;
            $upUser = new User();
            $userPac = $upUser->find($idPacUser)->delete();
            return redirect()->route('pacienteList');
   
    }

    public function pedido(){
        return view('layouts.paciente.solicitarConsulta');
    }

    public function listarPedido(){
        $pedidos=pedidoConsulta::all();
        return view('layouts.paciente.listarPedidoConsulta', compact('pedidos'));
    }

    public function pedidoConsulta(Request $request){
        
        $verefi=pedidoConsulta::where('paciente', $request->paciente)->get();
        if(count($verefi)==0){
            $pedidoConsulta = pedidoConsulta::create($request->all());
            if($pedidoConsulta){
                return redirect()->back()->with('alert', 'Você enviou um pedido de consulta!');
            }
        }else{
            return redirect()->back()->with('error', 'Você já enviou um pedido de consulta!');
        }
        
         
    }

    public function detPedido($nome){
        $detalhePac=$this->model->getNome($nome);
        return view('layouts.paciente.detalhePedido', compact('detalhePac'));
    }

    public function deletarPedido($id){
        pedidoConsulta::find($id)->delete();
        return redirect()->route('pedioConsultaGetList');
    }
}
