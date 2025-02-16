<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEnvioRequest extends FormRequest
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
            "id_pedido" => ['sometimes', 'required'],
            "metodo_envio" => ['sometimes','required'],
            "codigo_seguimiento"  => ['sometimes','required'],
            "fecha_envio"  => ['sometimes','required'],
            "fecha_entrega_estimada" => ['sometimes','required']
        ];
    }
}
