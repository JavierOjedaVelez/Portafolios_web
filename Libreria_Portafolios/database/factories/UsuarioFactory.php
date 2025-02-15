<?php

namespace Database\Factories;

use App\Models\TipoUsuario;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'email' => $this->faker->unique()->safeEmail(),
            'password' => bcrypt('password'),
            'fecha_registro' => $this->faker->date(),
            'tipo_usuario_id' => TipoUsuario::inRandomOrder()->first()->id_tipo_usuario,
            'baneado' => $this->faker->boolean(),
        ];
    }
}
