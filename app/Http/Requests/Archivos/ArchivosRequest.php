<?php

namespace App\Http\Requests\Archivos;

use Illuminate\Foundation\Http\FormRequest;

class ArchivosRequest extends FormRequest
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
            'solicitud' => 'required|file|mimes:pdf|max:10000',
            'titulo' => 'required|file|mimes:pdf|max:10000',
            'certificado' => 'required|file|mimes:pdf|max:10000',
            'acta' => 'required|file|mimes:pdf|max:10000',
            'curp' => 'required|file|mimes:pdf|max:10000',
            'ine' => 'required|file|mimes:pdf|max:10000',
            'recomendaciones.*' => 'required|file|mimes:pdf|max:10000|count:3',
            'examen' => 'required|file|mimes:pdf|max:10000',
        ];
    }
}
