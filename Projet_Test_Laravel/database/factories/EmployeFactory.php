<?php

namespace Database\Factories;


use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

//use Faker\Generator as Faker;

class EmployeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      return [
        'name' => $this->faker->name(),
        'address' => $this->faker->address(),
        'photo' => $this->faker->address(),
        'phone_number'=> $this->faker->e164PhoneNumber(),
        'salaire' => $this->faker->randomFloat(3, 0, 999),
      ];
    }
}
