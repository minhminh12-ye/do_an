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
        Schema::create('score_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('training_score_id')->constrained('training_scores')->cascadeOnDelete();
            $table->integer('old_score');
            $table->integer('new_score');
            $table->string('reason')->nullable();
            $table->timestamp('changed_at')->useCurrent();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('score_histories');
    }
};
