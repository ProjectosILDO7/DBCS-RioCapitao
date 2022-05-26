<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
   public function form(){
       if(Auth::user()){
            return redirect()->route('home.admin');
       }else{
            return redirect()->route('login');    
       }
   }

    public function logar(LoginRequest $request)
    {
        $lembrar = empty($request->lembrar) ? false: true;
        $usuario = User::where('email', $request->user)->first();
        
        //Autenticação
        if($usuario && Hash::check($request->password, $usuario->password)){
            Auth::loginUsingId($usuario->id, $lembrar); 
            return redirect()->route('logar.form');            
        }else{
            $erroEmail = 'O e-mail ou a senha informada não confere em nossa base de dados';
            return view('login', compact('erroEmail'));
        }
    }

}
