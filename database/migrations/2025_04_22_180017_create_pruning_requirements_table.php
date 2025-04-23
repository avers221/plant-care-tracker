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
        Schema::create('pruning_requirements', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('care_requirement_id')->constrained('care_requirements')->cascadeOnUpdate()->cascadeOnDelete();
            $table->boolean('needs_pruning')->default(false);
            $table->foreignId('when_to_prune_id')->constrained('when_to_prunes')->nullOnDelete()->cascadeOnUpdate();
            $table->text('notes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pruning_requirements');
    }
};
