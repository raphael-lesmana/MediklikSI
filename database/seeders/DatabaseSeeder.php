<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin_role = Role::create([
            'name' => 'admin'
        ]);

        $receptionist_role = Role::create([
            'name' => 'receptionist'
        ]);

        $doctor_role = Role::create([
            'name' => 'doctor'
        ]);

        $pharmacist_role = Role::create([
            'name' => 'pharmacist'
        ]);

        User::create([
            'name' => 'root',
            'password' => 'password',
            'role_id' => $admin_role->id,
            'dob' => '1970-01-01',
        ]);

        User::create([
            'name' => 'receptionist',
            'password' => 'password',
            'role_id' => $receptionist_role->id,
            'dob' => '1970-01-01',
        ]);

        User::create([
            'name' => 'doctor',
            'password' => 'password',
            'role_id' => $doctor_role->id,
            'dob' => '1970-01-01',
        ]);

        User::create([
            'name' => 'pharmacist',
            'password' => 'password',
            'role_id' => $pharmacist_role->id,
            'dob' => '1970-01-01',
        ]);
    }
}
