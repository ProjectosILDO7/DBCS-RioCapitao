<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class pacienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $id=$this->id;
        return [
            'nome'=>['bail', 'required'],
            'data_nasc'=>['bail', 'required'],
            'genero'=>['bail', 'required', 'max:1'],
            'endereco'=>['bail', 'required'],
            'telemovel'=>[
                'bail', 
                'required',
            "unique:pacientes,telemovel,{$id},id"],
            'email'=>[
                'bail', 
                'required',
                "unique:pacientes,email,{$id},id"],
        ];
    }

    public function messages(){
        return [
            'data_nasc.required'=>'A data de nascimento é obrigatório',
            'endereco.required'=>'O endereço é obrigatório',
            'telemovel.required'=>'O campo de telemovel é obrigatório',
            'email.required'=>'O campo e-mail é obrigatório'
        ];
        
    }
}
