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
        Schema::create('temperature_requirements', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('care_requirement_id')->constrained('care_requirements')->cascadeOnUpdate()->cascadeOnDelete();
            $table->float('optimal_range_min');
            $table->float('optimal_range_max');
            $table->float('min_temp');
            $table->float('max_temp');
            $table->boolean('draft_protection')->default(false);
            $table->text('notes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('temperature_requirements');
    }
};
