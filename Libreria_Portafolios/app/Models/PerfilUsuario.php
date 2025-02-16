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

    protected $fillable = [
        'nombre',
        'direccion',
        'telefono',
        'foto_perfil',
        'id_usuario'
    ];


    public function usuarios(){
        return $this->hasOne(Usuario::class, 'id_usuario');
    }
}
