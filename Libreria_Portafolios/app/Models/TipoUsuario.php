<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoUsuario extends Model
{
    /** @use HasFactory<\Database\Factories\TipoUsuarioFactory> */
    use HasFactory;

    protected $table = "tipo_usuarios";

    protected $primaryKey = "id_tipo_usuario";

    protected $fillable = ['nombre'];


    public function Usuarios(){
        return $this->hasMany(Usuario::class);
    }

}
