<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class perfilRequestAdmin extends FormRequest
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
        return [
            'primeiroNome'=>'bail|required',
            'ultimoNome'=>'bail|required',
            'email'=>'bail|required|unique',
            'tel'=>'bail|required',
            'senha'=>'bail|required|max:8|min:6',
        ];
    }

    public function message()
    {
        return [
            'primeiroNome.required'=>'O registo do primeiro nome é obrigatório',
            'ultimoNome.required'=>'O registo do segundo nome é obrigatório',
            'email.required'=>'O registo do e-mail é obrigatório',
            'tel.required'=>'O registo do Telemóvel é obrigatório',
            'senha.required'=>'O registo da senha é obrigatório',
        ];
    }
}
