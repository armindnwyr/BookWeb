<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition()
    {
        return [
            'li_titulo'=>$this->faker->name(),
            'li_autor'=>$this->faker->name(),
            'li_descripcion'=>$this->faker->realText(500),
            'li_enlace'=>$this->faker->url(),
            'li_image'=>$this->faker->imageUrl(),
        ];
    }
}
