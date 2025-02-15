<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Libro;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LibroGuardado>
 */
class LibroGuardadoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'isbn' => Libro::inRandomOrder()->first()->isbn, 
            'fecha_guardado' => $this->faker->date(),
        ];
    }
}
