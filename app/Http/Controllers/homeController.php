<?php

namespace App\Http\Controllers;

use app\contracts\perfilContracts;
use App\Http\Requests\perfilRequestAdmin;
use App\repos\perfiRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class homeController extends Controller
{
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

    public function create()
    {
        //
    }

    public function store(perfilContracts $perfiRepos)
    {
        return $perfiRepos->getAll();
        
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
