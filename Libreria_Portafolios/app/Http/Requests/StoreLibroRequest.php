<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLibroRequest extends FormRequest
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
            'titulo' => ['required'],
            'precio' => ['required'],
            'stock' => ['required'],
            'sinopsis' => ['required'],
            'portada' => ['required'],
            'fecha_publicacion' => ['required'],
            'id_tipo_libro' => ['required'],
            'id_edicion' => ['required']
        ];
    }
}
