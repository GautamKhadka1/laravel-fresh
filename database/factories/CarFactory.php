<?php


namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    public function definition(): array
    {
        return [
            'image' => $this->faker->imageUrl(640, 480, 'cars', true), // random car image
            'location' => $this->faker->city(),
            'price' => (string) $this->faker->numberBetween(1000000, 5000000), // as string
            // 'user_id' => (string) $this->faker->numberBetween(1, 20), // as string
            'name' => $this->faker->word() . ' ' . $this->faker->company(),
            'description' => [
                'color' => $this->faker->safeColorName(),
                'mileage' => $this->faker->numberBetween(10, 25) . ' kmpl',
                'year' => $this->faker->year()
            ],
        ];
    }
}
