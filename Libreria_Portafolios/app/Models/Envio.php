<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Envio extends Model
{
    /** @use HasFactory<\Database\Factories\EnvioFactory> */
    use HasFactory;

    protected $table = "envios";

    protected $primaryKey = "id_envio";

    protected $fillable = [
        "id_pedido",
        "metodo_envio",
        "codigo_seguimiento",
        "fecha_envio",
        "fecha_entrega_estimada"

    ];

    public function Pedidos(){
        return $this->belongsTo(Pedido::class, 'id_pedido');
    }

}
