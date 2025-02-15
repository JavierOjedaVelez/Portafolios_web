<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerfilUsuario extends Model
{
    /** @use HasFactory<\Database\Factories\PerfilUsuarioFactory> */
    use HasFactory;

    protected $table = "perfil_usuarios";

    protected $primaryKey = "id_perfil";

}
