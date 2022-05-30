<?php

namespace App\Http\Controllers;

use App\Http\Requests\medicoRequest;
use App\Models\especialidade;
use App\Models\medico;
use App\Models\User;
use App\repositorios\especialidade\contratos\especInterface;
use App\repositorios\medico\contratos\medicoInterface;

class MedicoController extends Controller
{
    
    protected $model;
    public function __construct(medicoInterface $esp)
    {
        $this->model = $esp;
    }
    
    public function index()
    {
      //
      $med = $this->model->getList();
      return view('layouts.medico.medico', compact('med'));  
    }

    public function create(especInterface $esp)
    {
       $esp = $esp->getList();
       $key=rand(200221,20112578);
       return view('layouts.medico.formMedico', compact('key', 'esp')); 
    }

    public function store(medicoRequest $request)
    {   
        $key=bcrypt($request->password);
        $dataUser=User::create([
            'name' =>$request->nome,
            'email'=>$request->email,
            'admin'=>'2',
            'tel'=>$request->telefone,
            'email_verified_at'=>now(),
            'password' => $key,
        ]);
        $userId = $dataUser->id;
        if(!$dataUser){
            return redirect()->back()->with('error', 'Erro ao executar esse registo!');
        }
        $data=$request->only('nome', 'telefone', 'email');
        $data['user_id']=$userId;
        $esp=$this->model->create($data);
        $esp->especialidades()->sync($request->especialidade);
        return redirect()->back()->with('alert', 'Medico(a) salvo com sucesso!'); 
    
    }

    public function infoMedico($id)
    {
        $info=$this->model->infoMedico($id);
        return view('layouts.medico.infoMedico', compact('info'));
    }

    public function edit(especInterface $esp, $id)
    {
        //
        $medico=$this->model->get($id);
        $espMedico = $this->model->get($id)->especialidades;
        $esp = $esp->getList();
        return view('layouts.medico.editMedico', compact('medico', 'espMedico', 'esp'));

    }

    public function update(medicoRequest $request, $id)
    {
        $idPacUser = $this->model->get($id)->user_id;
        $upUser = new User();
        $userPac = $upUser->find($idPacUser);
        $key = $upUser['password']=bcrypt($request->password);
        $userPac->update([
            'name'=>$request->nome,
            'email'=>$request->email,
            'admin' => '2',
            'tel'=>$request->telemovel,
            'email_verified_at'=>now(),
            'password'=>$key,
        ]);

        $medico = new medico();
        $findMedico = $medico->find($id);
        $up = $findMedico->update($request->only('nome', 'telefone', 'email'));
       
        if($request->has('especialidade')){
            $findMedico->especialidades()->sync($request->especialidade);
        }
        if(!$up){
            return redirect()->back();
        }
        return redirect()->route('medicoList');
    }

    public function destroy($id)
    {   if($id)
           $medico=$this->model->get($id);
           return view('layouts.medico.formAlertas', compact('medico'));
    }

    public function deletar($id){
            $idPacUser = $this->model->get($id)->user_id;
            $upUser = new User();
            $userPac = $upUser->find($idPacUser)->delete();
            return redirect()->route('medicoList'); 
    }
}
