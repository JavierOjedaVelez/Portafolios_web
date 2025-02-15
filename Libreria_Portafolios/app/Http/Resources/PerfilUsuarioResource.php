<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PerfilUsuarioResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id_perfil,
            "nombre" => $this->nombre,
            "direccion" => $this->direccion,
            "telefono" => $this->telefono,
            "foto_perfil" => $this->foto_perfil
        ];
    }
}
