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
        Schema::create('student_training_programs', function (Blueprint $table) {
            $table->id();

            $table->foreignId('student_id')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->foreignId('training_program_id')
                ->constrained('training_programs')
                ->cascadeOnDelete();

            $table->integer('training_score')->nullable(); // ✅ điểm rèn luyện
            $table->date('training_date')->nullable();     // ✅ ngày rèn luyện

            $table->foreignId('updated_by')
                ->constrained('users'); // monitor nhập

            $table->timestamps();

            $table->unique(['student_id', 'training_program_id']);
});


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_training_programs');
    }
};
