<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('program_results', function (Blueprint $table) {
            $table->id();

            $table->foreignId('training_program_id')
                ->constrained('training_programs')
                ->cascadeOnDelete();

            $table->foreignId('student_id')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->integer('training_score')->nullable();
            $table->date('training_date');

            $table->foreignId('approved_by')
                ->constrained('users'); // admin/monitor

            $table->timestamps();

            $table->unique(['training_program_id', 'student_id']);
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('program_results');
    }
};
