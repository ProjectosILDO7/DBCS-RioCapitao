<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registarConsultaRequest extends FormRequest
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
            'paciente'=>['bail', 'required'],
            'disponib_medica_id'=>['bail', 'required']
        ];
    }

    public function messages()
    {
        return [
            'paciente.required'=>'Preenchimento obrigatório',
            'disponib_medica_id.required'=>'Preenchimento obrigatório'
        ];
    }
}
