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
        Schema::create('compatibility_with_other_plants_requirements', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('care_requirement_id')->constrained('care_requirements')->cascadeOnUpdate()->cascadeOnDelete();
            $table->boolean('compatible_with_others')->default(false);
            $table->text('allelopathy')->nullable();
            $table->text('notes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compatibility_with_other_plants_requirements');
    }
};
