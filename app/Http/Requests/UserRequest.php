<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $id = $this->id ?? '';

        $rules = [
            'name' => 'bail|required',
            'email' => [
                'bail',
                'required',
                "unique:users,email,{$id},id" // validação de email com o mesmo form de cadastrar e editar
            ],
            'tel' => [
                'bail',
                'nullable',
                "unique:users,tel,{$id},id" // validação de tel com o mesmo form de cadastrar e editar
            ],
            'password' => 'bail|required|max:16|min:6',
            'admin' => 'bail|required'
        ];

        if ($this->method('PUT')) {

            $rules['password']=[
                'bail',
                'nullable',
                'max:16',
                'min:6',
            ];

            $rules['tel']=[
                'bail',
                'nullable',
                'max:9',
                'min:9',
            ];
            
        }
        
        return $rules;
    }

    public function messages()
    {
        return [
            'name.required'=>'O registo do primeiro nome é obrigatório',
            'ultimoNome.required'=>'O registo do segundo nome é obrigatório',
            'email.required'=>'O registo do e-mail é obrigatório',
            'tel.required'=>'O registo do Telemóvel é obrigatório',
            'password.required'=>'O registo da senha é obrigatório',
            'senha2.required' => 'Esta senha inserida não está igual a anterior',
            'admin.required' => 'Informe a designção para o sistema'
        ];
    }
}
