<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    /** @use HasFactory<\Database\Factories\LibroFactory> */
    use HasFactory;

    protected $table = "libros";
    protected $primaryKey = "isbn";

    protected $fillable = [
        'titulo',
        'precio',
        'stock',
        'sinopsis',
        'portada',
        'fecha_publicacion',
        'id_tipo_libro',
        'id_edicion'
    ];

    public function Autores(){
        return $this->belongsToMany(Autor::class, 'libro_autor', 'isbn', 'id_autor');
    }

    public function Generos(){
        return $this->belongsToMany(Genero::class, 'libro_generos', 'isbn', 'id_genero');
    }

    public function TipoLibros(){
        return $this->belongsTo(TipoLibro::class,'id_tipo_usuario');
    }

    public function Ediciones(){
        return $this->belongsTo(Edicion::class,'id_edicion');
    }

    public function LibrosGuardados(){
        return $this->hasMany(LibroGuardado::class);
    }

    public function Reseñas(){
        return $this->hasMany(Reseña::class);
    }

    public function Pedidos(){
        return $this->belongsToMany(Pedido::class, 'pedido_libros', 'isbn', 'id_pedido');
    }

    public function Usuarios(){
        return $this->belongsToMany(Usuario::class, 'carritos', 'isbn', 'id_usuario');
    }



}
