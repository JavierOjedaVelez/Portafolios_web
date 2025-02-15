<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edicion extends Model
{
    /** @use HasFactory<\Database\Factories\EdicionFactory> */
    use HasFactory;

    protected $table = "ediciones";

}
