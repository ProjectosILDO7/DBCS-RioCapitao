<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class horaVisitaRequest extends FormRequest
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
            'hora_visita'=>['bail','required'],
            'dia_visita'=>['bail','required'],
            'periodo'=>['bail','required'],
        ];
    }

    public function messages()
    {
        return [
            'hora_visita.required'=>'Campo obrigatório',
            'dia_visita.required'=>'Campo obrigatório',
            'periodo.required'=>'Campo obrigatório',
        ];
    }
}
