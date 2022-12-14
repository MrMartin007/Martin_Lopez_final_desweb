<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class criptomonedaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'logotiopo'=>$this->faker->word(),
            'nombre'=>$this->faker->name(),
            'precio'=>$this->faker->numerify(150),
            'descripcion'=>$this->faker->word(),
            'fecha_cracion'=>$this->faker->dateTime(),
        ];
    }
}
