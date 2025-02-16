<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cupon extends Model
{
    /** @use HasFactory<\Database\Factories\CuponFactory> */
    use HasFactory;

    protected $table = "cupones";

    protected $primaryKey = "id_cupon";

    protected $fillable = [
        "codigo",
        "descuento",
        "fecha_expiracion"
    ];

}
