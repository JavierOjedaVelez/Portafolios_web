<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EnvioResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [

            "id" => $this->id_envio,
            "metodo_envio" => $this->metodo_envio,
            "codigo_seguimiento" => $this->codigo_seguimiento,
            "fecha_envio" => $this->fecha_envio,
            "fecha_entrega_estimada" => $this->fecha_entrega_estimada
        ];
    }
}
