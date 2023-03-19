<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $titulo = $this->faker->name();
        return [
            'li_titulo'=>$titulo,
            'li_slug' => Str::slug($titulo),
            'li_autor'=>$this->faker->name(),
            'li_descripcion'=>$this->faker->realText(500),
            'li_enlace'=>$this->faker->url(),
            'li_image'=>$this->faker->imageUrl(),
        ];
    }
}
