<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class lenguaje_programcionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'descripcion'=>$this->faker->word(),
        ];

    }
}
