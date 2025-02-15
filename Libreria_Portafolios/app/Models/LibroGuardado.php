<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LibroGuardado extends Model
{
    /** @use HasFactory<\Database\Factories\LibroGuardadoFactory> */
    use HasFactory;

    protected $table = "libro_guardados";
    protected $primaryKey = "id_libros_guardados";

}
