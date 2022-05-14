<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class medicoRequest extends FormRequest
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
        
        $rules = [
            'nome'=>['bail', 'required', 'max:45'],
            'telefone'=>['bail', 'required', 'max:9'],
            'email'=>[
                'bail', 
                'required',
                "unique:medicos,email,{$id},id"
            ],
            'password'=>['bail', 'required', 'max:16', 'min:6'],
        ];

        if($this->method('put')){
            $rules = [
                'password' => [
                    'bail',
                    'nullable',
                    'max:16',
                    'min:6',
                ],
            ];
        }

        return $rules;

    }
}
