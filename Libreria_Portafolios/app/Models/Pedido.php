<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    /** @use HasFactory<\Database\Factories\PedidoFactory> */
    use HasFactory;

    protected $table = "pedidos";
    protected $primaryKey = "id_pedido";

    protected $fillable = [
        'id_usuario',
        'total',
        'fecha_pedido',
        'estado'
    ];


    public function Libros(){
        return $this->belongsToMany(Libro::class, 'pedido_libros', 'id_pedido', 'isbn');
    }

    public function Usuarios(){
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }
}
