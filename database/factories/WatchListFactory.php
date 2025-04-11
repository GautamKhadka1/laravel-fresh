<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WatchListFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 20),
            'car_id' => $this->faker->numberBetween(1, 1000),
        ];
    }
}
