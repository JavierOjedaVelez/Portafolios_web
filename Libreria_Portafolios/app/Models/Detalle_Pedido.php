<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_Pedido extends Model
{
    /** @use HasFactory<\Database\Factories\DetallePedidoFactory> */
    use HasFactory;

    protected $table = "detalle_pedidos";

}
