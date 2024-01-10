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
        Schema::create('recycling_guidelines', function (Blueprint $table) {
            $table->id();
            $table->integer('waste_type_id')->index('user_deposits_waste_type_id_foreign_idx')->nullable();
            $table->text('guidelines_content')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recycling_guidelines');
    }
};
