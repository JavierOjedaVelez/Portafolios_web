<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cupon>
 */
class CuponFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

                    'codigo' => $this->faker->unique()->word(),
                    'descuento' => $this->faker->randomFloat(2, 5, 50), 
                    'fecha_expiracion' => $this->faker->dateTimeBetween('+1 week', '+1 year')->format('Y-m-d')
        ];
    }
}
