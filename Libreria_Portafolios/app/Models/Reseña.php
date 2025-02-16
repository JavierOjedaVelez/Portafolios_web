<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reseña extends Model
{
    /** @use HasFactory<\Database\Factories\ReseñaFactory> */
    use HasFactory;

    protected $table = "reseñas";

    protected $primaryKey = "id_reseña";
    protected $fillable = [
        'id_usuario',
        'isbn',
        'puntuacion',
        'comentario'
    ];


    public function Libros(){
        return $this->belongsTo(Libro::class, 'isbn');
    }

    public function Usuarios()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }

}
