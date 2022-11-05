<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class lenguaje_programacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id'=>$this->faker->numberBetween(1,1000),
            'descripcion'=>$this->faker->word(),
        ];
    }
}
