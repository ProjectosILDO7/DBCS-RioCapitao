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
            'paciente_id'=>['bail', 'required'],
            'disponib_medico_consulta_id'=>['bail', 'required']
        ];
    }

    public function messages()
    {
        return [
            'paciente_id.required'=>'Preenchimento obrigatório',
            'disponib_medico_consulta_id.required'=>'Preenchimento obrigatório'
        ];
    }
}
