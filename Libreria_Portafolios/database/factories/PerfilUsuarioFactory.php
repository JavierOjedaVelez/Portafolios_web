<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Usuario;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PerfilUsuario>
 */
class PerfilUsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name(),
            'direccion' => $this->faker->address(),
            'telefono' => $this->faker->phoneNumber(),
            'foto_perfil' => $this->faker->imageUrl(),
            'id_usuario' => Usuario::inRandomOrder()->first()->id_usuario, 

        ];
    }
}
