<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUsuarioRequest extends FormRequest
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
            'email' => ['sometimes','required'],
            'password' => ['sometimes','required'],
            'fecha_registro' => ['sometimes','required'],
            'id_tipo_usuario' => ['sometimes','required'],
            'baneado' => ['sometimes','required']
        ];
    }
}
