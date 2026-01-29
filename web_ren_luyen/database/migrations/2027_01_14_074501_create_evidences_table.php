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
        Schema::create('evidences', function (Blueprint $table) {
        $table->id();

        $table->foreignId('student_training_program_id')
            ->constrained('student_training_programs')
            ->cascadeOnDelete();

        $table->string('file_path');          // đường dẫn file
        $table->string('file_type');          // image / pdf / doc
        $table->integer('file_size')->nullable(); // KB hoặc byte

        $table->text('description')->nullable();
        $table->string('status')->default('submitted');

        $table->foreignId('program_result_id')->nullable() ->constrained('program_results') ->nullOnDelete();

        $table->timestamps();
    });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evidences');
    }
};
