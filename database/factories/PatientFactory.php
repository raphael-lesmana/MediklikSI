<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'gender' => rand(0, 1) ? 'Laki-laki' : 'Perempuan',
            'dob' => fake()->date(),
            'phone' => fake()->phoneNumber(),
            'email' => fake()->email(),
        ];
    }
}
