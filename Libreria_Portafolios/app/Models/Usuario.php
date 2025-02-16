<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    /** @use HasFactory<\Database\Factories\UsuarioFactory> */
    use HasFactory;

    protected $table = "usuarios";

    protected $primaryKey = 'id_usuario';

    protected $fillable = [
        'email',
        'password',
        'fecha_registro',
        'id_tipo_usuario',
        'baneado'
    ];

    public function TipoUsuarios(){
        return $this->belongsTo(TipoUsuario::class, 'id_tipo_usuario');
    }

    public function perfiles(){
        return $this->belongsTo(PerfilUsuario::class);
    }

    public function Reseñas(){
        return $this->hasMany(Reseña::class);
    }

    public function Pedidos(){
        return $this->hasMany(Pedido::class);
    }

    public function Libros(){
        return $this->belongsToMany(libro::class, 'carritos', 'id_usuario','isbn');
    }

    public function LibroGuardados(){
        return $this->belongsToMany(LibroGuardado::class, 'usuario_libro_guardados', 'id_usuario', 'id_libro_guardado');
    }

}
