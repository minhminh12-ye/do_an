<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'monitor@test.com'],
            [
                'name' => 'Monitor Gốc',
                'password' => Hash::make('123456'),
            ]
        );

        User::firstOrCreate(
            ['email' => 'student@test.com'],
            [
                'name' => 'Student Test',
                'password' => Hash::make('123456'),
            ]
        );
    }
}
