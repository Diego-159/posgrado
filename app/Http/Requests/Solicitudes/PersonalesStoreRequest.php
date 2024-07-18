<?php

namespace App\Http\Requests\Solicitudes;

use Illuminate\Foundation\Http\FormRequest;

class PersonalesStoreRequest extends FormRequest
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
            'mecanismo' => 'required|integer',
            'nombre' => 'required|string|max:255',
            'fecha_nacimiento' => 'required|date',
            'estado_civil' => 'required|integer',
            'email' => 'required|email|max:255',
            'direccion' => 'required|string',
            'ciudad' => 'required|string|max:100',
            'estado' => 'required|string|max:100',
            'telefono' => 'required|string|max:16',
            //'foto' => 'required|max:2048',//|mimes:jpeg,png,jpg,gif,svg',
        ];
    }
    public function messages()
    {
        return [
            'mecanismo.required' => 'El campo mecanismo es requerido.',
            'nombre.required' => 'El campo nombre es requerido.',
            'nombre.string' => 'El campo nombre debe ser una cadena de texto.',
            'nombre.max' => 'El campo nombre no debe exceder los 255 caracteres.',
            'fecha_nacimiento.required' => 'El campo fecha de nacimiento es requerido.',
            'fecha_nacimiento.date' => 'El campo fecha de nacimiento debe ser una fecha.',
            'estado_civil.required' => 'El campo estado civil es requerido.',
            'email.required' => 'El campo email es requerido.',
            'email.email' => 'El campo email debe ser un correo electrónico.',
            'email.max' => 'El campo email no debe exceder los 255 caracteres.',
            'direccion.required' => 'El campo dirección es requerido.',
            'direccion.string' => 'El campo dirección debe ser un texto.',
            'ciudad.required' => 'El campo ciudad es requerido.',
            'ciudad.string' => 'El campo ciudad debe ser una cadena de texto.',
            'ciudad.max' => 'El campo ciudad no debe exceder los 100 caracteres.',
            'estado.required' => 'El campo estado es requerido.',
            'estado.string' => 'El campo estado debe ser una cadena de texto.',
            'estado.max' => 'El campo estado no debe exceder los 100 caracteres.',
            'telefono.required' => 'El campo teléfono es requerido.',
            'telefono.string' => 'El campo teléfono debe ser una cadena de texto.',
            'telefono.max' => 'El campo teléfono no debe exceder los 16 caracteres.',
            //'foto.required' => 'El campo foto es requerido.',
            //'foto.mimes' => 'El campo foto debe ser una imagen de tipo: jpeg, png, jpg, gif, svg.',
            //'foto.max' => 'El campo foto no debe exceder los 2048 kilobytes.',
        ];
    }
}
