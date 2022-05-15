<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class quartoRequest extends FormRequest
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
            'num_quart'=>['bail','required'],
            'num_cama'=>['bail','required'],
            'piso'=>['bail','required'],
        ];
    }

    public function messages()
    {
        return [
            'num_quart.required'=>'O campo é obrigatório',
            'num_cama.required'=>'O campo é obrigatório',
            'piso.required'=>'O campo é obrigatório',
        ];
    }
}
