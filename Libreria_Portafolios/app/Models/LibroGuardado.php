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
    protected $fillable = [
        'isbn',
        'fecha_guardado'
    ];


    public function Libros(){
        return $this->belongsTo(Libro::class, 'isbn');
    }

    public function Usuarios(){
        return $this->belongsToMany(Usuario::class, 'usuario_libro_guardados', 'id_libro_guardado', 'id_usuario');
    }

}
