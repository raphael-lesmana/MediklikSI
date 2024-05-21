<?php

namespace Database\Factories;

use App\Models\Patient;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MedicalReport>
 */
class MedicalReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        return [
            'patient_id' => Patient::all()->random()->id,
            'staff_id' => User::all()->random()->id,
            'systolic_blood_pressure' => fake()->numberBetween(60, 120),
            'diastolic_blood_pressure' => fake()->numberBetween(60, 120),
            'respiratory_rate' => fake()->numberBetween(10, 40),
            'oxygen_saturation_level' => fake()->numberBetween(90, 100),
            'body_temperature' => fake()->numberBetween(30, 40),
            'height' => fake()->numberBetween(120, 180),
            'weight' => fake()->numberBetween(30, 100),
            'symptoms' => fake()->realText(400),
            'diagnosis' => fake()->realText(400),
            'suggestion' => fake()->realText(400),
        ];
    }
}
