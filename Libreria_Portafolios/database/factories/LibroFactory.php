<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Edicion;
use App\Models\TipoLibro;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libro>
 */
class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->sentence(),
            'precio' => $this->faker->randomFloat(2, 5, 50),
            'stock' => $this->faker->numberBetween(0, 100),
            'sinopsis' => $this->faker->paragraph(),
            'portada' => $this->faker->imageUrl(),
            'fecha_publicacion' => $this->faker->date(),
            'id_tipo_libro' => TipoLibro::inRandomOrder()->first()->id_tipo_libro,
            'id_edicion' => Edicion::inRandomOrder()->first()->id_edicion,
        ];
    }
}
