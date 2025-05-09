<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    /** @use HasFactory<\Database\Factories\GeneroFactory> */
    use HasFactory;

    protected $table = "generos";
    protected $primaryKey = "id_genero";
    protected $fillable = [
        'nombre'
    ];


    public function Libros(){
        return $this->belongsToMany('libro_genero', 'id_generos', 'isbn');
    }

}
