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
        Schema::create('training_scores', function (Blueprint $table) {
            $table->id();

            $table->foreignId('student_id')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->string('semester');
            // ví dụ: 2024-1, 2024-2

            $table->float('total_score')->default(0);

            $table->foreignId('approved_by')
                ->constrained('users'); // admin duyệt

            $table->timestamps();

            $table->unique(['student_id', 'semester']);
});


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('training_scores');
    }
};
