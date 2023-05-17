<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'date_of_birth' => $this->faker->dateTimeBetween('1990-01-01', '2012-12-31')
            ->format('Y-m-d'),
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->unique()->numerify('###-###-####'),
            'address' => $this->faker->address,
        ];
    }
}
