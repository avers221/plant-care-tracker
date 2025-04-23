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
        Schema::create('fertilizing_requirements', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('care_requirement_id')->constrained('care_requirements')->cascadeOnUpdate()->cascadeOnDelete();
            $table->integer('frequency_days');
            $table->foreignId('fertilizer_type_id')->constrained('fertilizer_types')->nullOnDelete()->cascadeOnUpdate();
            $table->foreignId('application_method_id')->constrained('application_methods')->nullOnDelete()->cascadeOnUpdate();
            $table->text('notes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fertilizing_requirements');
    }
};
