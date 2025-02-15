<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Usuario;
use App\Models\Libro;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reseña>
 */
class ReseñaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_usuario' => Usuario::inRandomOrder()->first()->id_usuario,
            'isbn' => Libro::inRandomOrder()->first()->isbn,
            'puntuacion' => $this->faker->randomFloat(1, 1, 5), 
            'comentario' => $this->faker->optional()->paragraph(),
        ];
    }
}
