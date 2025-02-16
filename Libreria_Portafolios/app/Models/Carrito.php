<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    /** @use HasFactory<\Database\Factories\CarritoFactory> */
    use HasFactory;

    protected $table = "carritos";
    protected $primaryKey = "id_carrito";
    protected $fillable = [
        'id_usuario',
        'isbn',
        'cantidad'
    ];

}
