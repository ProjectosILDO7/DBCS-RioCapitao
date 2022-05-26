<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class internamentoRequest extends FormRequest
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
            //validacao
            'paciente_id' => ['bail', 'required', 'unique:internamentos'],
            'quarto_de_internamentos_id' => ['bail', 'required'],
            'medico_respons' => ['bail', 'required'],
        ];
    }


    public function messages()
    {
        return [
            //validacao
            'paciente_id.required' => 'Campo de preenchimento obrigatorio',
            'quarto_de_internamentos_id.required' => 'Campo de preenchimento obrigatorio',
            'medico_respons.required' => 'Campo de preenchimento obrigatorio',
        ];
    }
}
