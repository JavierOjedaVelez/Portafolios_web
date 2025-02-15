<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pedido;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Envio>
 */
class EnvioFactory extends Factory
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
            'metodo_envio' => $this->faker->randomElement(['Estándar', 'Exprés', 'Recogida en tienda']),
            'codigo_seguimiento' => $this->faker->unique()->word(),
            'fecha_envio' => $this->faker->dateTimeBetween('-1 week', 'now')->format('Y-m-d'),
            'fecha_entrega_estimada' => $this->faker->dateTimeBetween('now', '+1 month')->format('Y-m-d'), 

        ];
    }
}
