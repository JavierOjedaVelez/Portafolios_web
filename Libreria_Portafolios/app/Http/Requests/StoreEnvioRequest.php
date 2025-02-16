<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEnvioRequest extends FormRequest
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
            "id_pedido" => ['required'],
            "metodo_envio" => ['required'],
            "codigo_seguimiento"  => ['required'],
            "fecha_envio"  => ['required'],
            "fecha_entrega_estimada" => ['required']
        ];
    }
}
