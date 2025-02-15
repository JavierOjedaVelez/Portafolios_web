<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Envio extends Model
{
    /** @use HasFactory<\Database\Factories\EnvioFactory> */
    use HasFactory;

    protected $table = "envios";

    protected $primaryKey = "id_envio";

}
