<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edicion extends Model
{
    /** @use HasFactory<\Database\Factories\EdicionFactory> */
    use HasFactory;

    protected $table = "ediciones";

    protected $primaryKey = "id_edicion";

    protected $fillable = [
        "nombre"
    ];

    public function Libros(){
        return $this->hasMany(Libro::class);
    }

}
