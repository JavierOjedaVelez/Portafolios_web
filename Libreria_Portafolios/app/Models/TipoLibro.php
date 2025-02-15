<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoLibro extends Model
{
    /** @use HasFactory<\Database\Factories\TipoLibroFactory> */
    use HasFactory;

    protected $table = "tipo_libros";

}
