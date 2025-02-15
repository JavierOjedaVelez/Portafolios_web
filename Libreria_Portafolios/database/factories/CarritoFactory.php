<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Usuario;
use App\Models\Libro;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Carrito>
 */
class CarritoFactory extends Factory
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
            'cantidad' => $this->faker->numberBetween(1, 5),
        ];
    }
}
