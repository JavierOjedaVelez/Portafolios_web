<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LibroResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "isbn" => $this->isbn,
            "Titulo" => $this->titulo,
            "Precio" => $this->precio,
            "Stock" => $this->stock,
            "Sinopsis" => $this->sinopsis,
            "portada" => $this->portada,
            "fecha de publicacion" => $this->fecha_publicacion
        ];
    }
}
