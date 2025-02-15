<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CuponResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id_cupon,
            "codigo" => $this->codigo,
            "descuento" => $this->descuento,
            "fecha_expiracion" => $this->fecha_expiracion
        ];
    }
}
