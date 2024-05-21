<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medicine>
 */
class MedicineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'stock' => fake()->numberBetween(2, 100),
            'form' => fake()->randomElement(['Capsule', 'Tablet', 'Syrup']),
            'price' => fake()->numberBetween(2, 100),
        ];
    }
}
