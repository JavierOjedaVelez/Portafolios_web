<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle_Pedido extends Model
{
    /** @use HasFactory<\Database\Factories\DetallePedidoFactory> */
    use HasFactory;

    protected $table = "detalle_pedidos";

    protected $primaryKey = "id_detalle_pedido";

    protected $fillable = [
        'id_pedido',
        'isbn',
        'cantidad',
        'precio_unitario'
    ];


    public function Pedidos(){
        return $this->belongsTo(Pedido::class, 'id_pedido');
    }

    public function Libros(){
        return $this->belongsTo(Libro::class, 'isbn');
    }

}
