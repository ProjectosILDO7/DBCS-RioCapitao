<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\UserRequest;
use App\Models\medico;
use App\Models\paciente;
use App\Models\User;
use Illuminate\Http\Request;

class homeController extends Controller
{

    public function index()
    {
        //
        return view('layouts.home.page-user');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(UserRequest $request, $id)
    {
        //

        if (Auth()->user()->admin=='1') {
            User::find($id)->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'admin'=>$request->admin,
                'tel'=>$request->tel,
                'password'=>bcrypt($request->password),
            ]);
            return redirect()->back()->with('alert', 'Perfil alterado com sucesso');
        } elseif(Auth()->user()->admin=='2') {

            $userID=User::find($id)->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'admin'=>$request->admin,
                'tel'=>$request->tel,
                'password'=>bcrypt($request->password),
            ]);

            $medico=medico::where('user_id', $id)->update([
                'nome'=>$request->name,
                'telefone'=>$request->tel,
                'email'=>$request->email,
            ]);

            return redirect()->back()->with('alert', 'Perfil alterado com sucesso');
        }elseif(Auth()->user()->admin=='3'){
            $userID=User::find($id)->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'admin'=>$request->admin,
                'tel'=>$request->tel,
                'password'=>bcrypt($request->password),
            ]);

            $medico=paciente::where('user_id', $id)->update([
                'nome'=>$request->name,
                'telemovel'=>$request->tel,
                'email'=>$request->email,
            ]);

            return redirect()->back()->with('alert', 'Perfil alterado com sucesso');
        }else{
            return redirect()->back();
        }
        
        
    }

    public function destroy($id)
    {
        //
    }
}
