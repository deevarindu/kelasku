<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'nama' => $this->faker->name,
          'kelas' => $this->faker->numberBetween(7, 9),
          'email' => $this->faker->email,
          'password' => $this->faker->password,
        ];
    }
}
