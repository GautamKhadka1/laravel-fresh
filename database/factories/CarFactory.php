<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory; // ✅ Add this line
use Illuminate\Support\Str;
class CarFactory extends Factory
{
    public function definition(): array
    {
        return [
            'image' => $this->faker->imageUrl(640, 480, 'cars', true),
            'location' => $this->faker->city(),
            'price' => (string) $this->faker->numberBetween(1000000, 5000000),
            'name' => $this->faker->word() . ' ' . $this->faker->company(),
            'description' => [
                'color' => $this->faker->safeColorName(),
                'mileage' => $this->faker->numberBetween(10, 25) . ' kmpl',
                'year' => $this->faker->year(),
                'maker' => $this->faker->company(),
                'model' => strtoupper($this->faker->bothify('??###')),
                'car_type' => $this->faker->randomElement(['SUV', 'Sedan', 'Hatchback', 'Truck', 'Convertible']),
                'fuel_type' => $this->faker->randomElement(['Petrol', 'Diesel', 'Electric', 'Hybrid']),
                'detail' => $this->faker->paragraph(3),
            ],

            // 🔧 Specification field with boolean features
            'specification' => [
                'Air Conditioning' => $this->faker->boolean(),
                'Power Windows' => $this->faker->boolean(),
                'Power Door Locks' => $this->faker->boolean(),
                'ABS' => $this->faker->boolean(),
                'Cruise Control' => $this->faker->boolean(),
                'Bluetooth Connectivity' => $this->faker->boolean(),
                'Remote Start' => $this->faker->boolean(),
                'GPS Navigation System' => $this->faker->boolean(),
                'Heated Seats' => $this->faker->boolean(),
                'Climate Control' => $this->faker->boolean(),
                'Rear Parking Sensors' => $this->faker->boolean(),
                'Leather Seats' => $this->faker->boolean(),
            ],
        ];
    }
}
