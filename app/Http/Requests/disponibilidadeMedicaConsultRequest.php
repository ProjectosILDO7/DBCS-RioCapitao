<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class disponibilidadeMedicaConsultRequest extends FormRequest
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
            'data_dispon'=>['bail', 'required'],
            'hora_inicial'=>['bail', 'required'],
            'hora_final'=>['bail', 'required'],
            'especialidade'=>['bail', 'required'],
        ];
    }

    public function messages()
    {
        return [
            'data_dispon.required'=>'É de preenchimento obrigatório',
            'hora_inicial.required'=>'É de preenchimento obrigatório',
            'hora_final.required'=>'É de preenchimento obrigatório',
            'especialidade.required'=>'É de preenchimento obrigatório',
        ];
    }
}
