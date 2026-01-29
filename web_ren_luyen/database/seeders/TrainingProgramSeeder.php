<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TrainingProgram;
use App\Models\User;

class TrainingProgramSeeder extends Seeder
{
    public function run(): void
    {
        $monitor = User::where('email', 'monitor@test.com')->first();

        if (!$monitor) {
            $this->command->error('❌ Chưa có monitor');
            return;
        }

        TrainingProgram::firstOrCreate(
            ['name' => 'Chương trình rèn luyện gốc'],
            [
                'user_id' => $monitor->id,
                'description' => 'Data gốc để test hệ thống',
                'start_date' => now(),
                'end_date' => now()->addMonth(),
            ]
        );
    }
}
