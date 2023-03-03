<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Docente>
 */
class DocenteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'doce_nombre'=>$this->faker->name(),
            'doce_paterno'=>$this->faker->name(),
            'doce_materno'=>$this->faker->name(),
            'doce_sexo' =>$this->faker->randomElement(array('Masculino', 'Femenino', 'No Especificado')),
            // 'doce_celular'=>$this->faker->randomNumber(9,true),
            // 'doce_correo'=>$this->faker->unique()->safeEmail(),
            'created_at' => $this->faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = null),
            'updated_at' => $this->faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = null),
        ];
    }
}
