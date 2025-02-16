<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLibroRequest extends FormRequest
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
            'titulo' => ['sometimes','required'],
            'precio' => ['sometimes','required'],
            'stock' => ['sometimes','required'],
            'sinopsis' => ['sometimes','required'],
            'portada' => ['sometimes','required'],
            'fecha_publicacion' => ['sometimes','required'],
            'id_tipo_libro' => ['sometimes','required'],
            'id_edicion' => ['sometimes','required']
        ];
    }
}
