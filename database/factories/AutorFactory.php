<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Autor>
 */
class AutorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'au_nombre'=>$this->faker->name(),
            'au_paterno'=>$this->faker->name(),
            'au_materno'=>$this->faker->name(),
            'au_codigo'=>$this->faker->randomNumber(6,true),
            'au_correo'=>$this->faker->unique()->safeEmail(),
            'au_celular'=>$this->faker->randomNumber(9,true),
            'created_at' => $this->faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = null),
            'updated_at' => $this->faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = null),
        ];
    }
}
