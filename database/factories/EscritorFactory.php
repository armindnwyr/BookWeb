<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Escritor>
 */
class EscritorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombres' => $this->faker->name(),
            'apellidos' => $this->faker->name(),
            'bibliografia' => $this->faker->text(),
        ]; 
    }
}
