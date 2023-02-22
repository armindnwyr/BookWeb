<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Informe>
 */
class InformeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'info_nombre' => $this->faker->name(),
            'info_descripcion' => $this->faker->realText(),
            'info_codigo' => $this->faker->randomDigit(),
            'info_centro' => $this->faker->title(),
            'info_pdf' => $this->faker->url(),
            'info_fecha' => $this->faker->date(),
            'docente_id' => $this->faker->numberBetween(1,20),
            'categoria_id' => $this->faker->numberBetween(1,2),
            'autor_id' => $this->faker->numberBetween(1,20),
        ];
    }
}
