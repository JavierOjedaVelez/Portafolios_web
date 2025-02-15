<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Genero::factory(5)->create();
        \App\Models\Edicion::factory(5)->create();
        \App\Models\Autor::factory(5)->create();
        \App\Models\TipoLibro::factory(2)->create();
        \App\Models\TipoUsuario::factory(2)->create();
        \App\Models\Usuario::factory(5)->create();
        \App\Models\PerfilUsuario::factory(5)->create();
        \App\Models\Libro::factory(10)->create();
        \App\Models\LibroGuardado::factory(5)->create();
        \App\Models\Reseña::factory(10)->create();
        \App\Models\Carrito::factory(5)->create();
        \App\Models\Pedido::factory(5)->create();
        \App\Models\Detalle_Pedido::factory(5)->create();
        \App\Models\Cupon::factory(3)->create();
        \App\Models\Envio::factory(5)->create();
    }
}
