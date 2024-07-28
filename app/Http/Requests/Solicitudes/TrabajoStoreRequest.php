<?php

namespace App\Http\Requests\Solicitudes;

use Illuminate\Foundation\Http\FormRequest;

class TrabajoStoreRequest extends FormRequest
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
            'ocupacion' => 'required|string|max:50',
            'direccion' => 'required|string|max:255',
            'ciudad' => 'required|string|max:50',
            'estado' => 'required|string|max:50',
            'telefono' => 'required|string|max:16',
        ];
    }

    public function messages(){
        return [
            'ocupacion.required' => 'El campo ocupación es obligatorio',
            'ocupacion.string' => 'El campo ocupación debe ser una cadena de texto',
            'ocupacion.max' => 'El campo ocupación debe tener máximo 50 caracteres',
            'direccion.required' => 'El campo dirección es obligatorio',
            'direccion.string' => 'El campo dirección debe ser una cadena de texto',
            'direccion.max' => 'El campo dirección debe tener máximo 255 caracteres',
            'ciudad.required' => 'El campo ciudad es obligatorio',
            'ciudad.string' => 'El campo ciudad debe ser una cadena de texto',
            'ciudad.max' => 'El campo ciudad debe tener máximo 50 caracteres',
            'estado.required' => 'El campo estado es obligatorio',
            'estado.string' => 'El campo estado debe ser una cadena de texto',
            'estado.max' => 'El campo estado debe tener máximo 50 caracteres',
            'telefono.required' => 'El campo teléfono es obligatorio',
            'telefono.string' => 'El campo teléfono debe ser una cadena de texto',
            'telefono.max' => 'El campo teléfono debe tener máximo 16 caracteres',
        ];
    }
}
