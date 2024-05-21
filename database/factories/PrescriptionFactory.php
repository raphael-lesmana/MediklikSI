<?php

namespace Database\Factories;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prescription>
 */
class PrescriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $pharmacist_role = Role::where('name', 'pharmacist')->first();
        $doctor_role = Role::where('name', 'doctor')->first();
        return [
            'description' => fake()->realText(150),
            'pharmacist_id' => User::where('role_id', $pharmacist_role->id)->random()->id,
            'doctor_id' => User::where('role_id', $doctor_role->id)->random()->id,
        ];
    }
}
