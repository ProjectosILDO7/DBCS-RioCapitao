<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class prescricaoMedicaRequest extends FormRequest
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
            'paciente' => ['unique:prescricao_medicas,paciente'],
            'presc_medica'=>['bail', 'required'],
        ];
    }

    public function messages()
    {
        return [
            'presc_medica.required'=>'O campo diagnostico deve estar preenchido',
        ];
    }
}
