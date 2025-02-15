<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pedido;
use App\Models\Libro;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Detalle_Pedido>
 */
class Detalle_PedidoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_pedido' => Pedido::inRandomOrder()->first()->id_pedido,
            'isbn' => Libro::inRandomOrder()->first()->isbn,
            'cantidad' => $this->faker->numberBetween(1, 5),
            'precio_unitario' => $this->faker->randomFloat(2, 5, 100),
        ];
    }
}
