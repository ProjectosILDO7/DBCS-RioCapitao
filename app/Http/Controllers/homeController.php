<?php

namespace App\Http\Controllers;

use App\repositorios\contratos\modelContrato;
use Illuminate\Http\Request;
class homeController extends Controller
{
    protected $model;

    public function __construct(modelContrato $con )
    {
       $this->model=$con; 
    }
    public function definPage(){
        
        $nome = Auth()->user()->name;
        $email = Auth()->user()->email;
        $tel = Auth()->user()->tel;
        return view('layouts.page-user', compact('nome', 'email', 'tel'));
    }

    public function index()
    {
        //
    }

    public function create(Request $request)
    {
        $data = $request->all();
        $data['password']=bcrypt($request->password);
        $req= $this->model->store($data);
        dd($req);
    }

    public function store()
    {
        
        
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
