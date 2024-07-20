<?php

namespace App\Http\Requests\Solicitudes;

use Illuminate\Foundation\Http\FormRequest;

class EstudiosStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'gradol' => 'required|string',
            'institucionl' => 'string|max:255',
            'num_extras' => 'integer',
            'adi_cnval' => 'integer',
            'fecha_egresol' => 'required|date',
            'fecha_titulacionl' => 'required|date',
            'promediol' => 'required|float',
            'estudios' => 'required|string|max:255',
            'gradom' => 'string|max:255',
            'fecha_egresom' => 'date',
            'fecha_titulacionm' => 'date',
            'promediom' => 'float',
        ];
    }
    
    public function messages()
    {
        return [
            'gradol.required' => 'El campo licenciatura es requerido.',
            'gradol.string' => 'El campo licenciatura debe ser una cadena de texto.',
            'institucionl.string' => 'El campo institucion debe ser una cadena de texto.',
            'institucionl.max' => 'El campo institucion no debe exceder los 255 caracteres.',
            'num_extras.integer' => 'El campo número de extras debe ser un número entero.',
            'adi_cnval.integer' => 'El campo debe ser un número entero.',
            'fecha_egresol.required' => 'El campo fecha de egreso es requerido.',
            'fecha_egresol.date' => 'El campo fecha de egreso debe ser una fecha.',
            'fecha_titulacionl.required' => 'El campo fecha de titulación es requerido.',
            'fecha_titulacionl.date' => 'El campo fecha de titulación debe ser una fecha.',
            'promediol.required' => 'El campo promedio es requerido.',
            'promediol.float' => 'El campo promedio debe ser un número decimal.',
            'estudios.required' => 'El campo estudios es requerido.',
            'estudios.string' => 'El campo estudios debe ser una cadena de texto.',
            'estudios.max' => 'El campo estudios no debe exceder los 255 caracteres.',
            'gradom.string' => 'El campo maestría debe ser una cadena de texto.',
            'gradom.max' => 'El campo maestría no debe exceder los 255 caracteres.',
            'fecha_egresom.date' => 'El campo fecha de egreso debe ser una fecha.',
            'fecha_titulacionm.date' => 'El campo fecha de titulación debe ser una fecha.',
            'promediom.float' => 'El campo promedio debe ser un número decimal.',
        ];
    }
}
