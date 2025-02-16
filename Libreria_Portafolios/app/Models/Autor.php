<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    /** @use HasFactory<\Database\Factories\AutorFactory> */
    use HasFactory;

    protected $table = "autores";

    protected $primaryKey = "id_autor";

    protected $fillable =[
        'nombre',
        'biografia',
        'fecha_nacimiento'
    ];

    public function libros(){
        return $this->belongsToMany(Libro::class, 'libro_autor', 'id_autor', 'isbn');
    }
}
