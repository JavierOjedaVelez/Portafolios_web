<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Usuario;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pedido>
 */
class PedidoFactory extends Factory
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
            'total' => $this->faker->randomFloat(2, 10, 1000),
            'fecha_pedido' => $this->faker->date(),
            'estado' => $this->faker->randomElement(['pendiente', 'enviado', 'entregado']), 

        ];
    }
}
