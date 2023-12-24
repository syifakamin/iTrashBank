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
        Schema::create('user_deposits', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->index('user_deposits_user_id_foreign_idx');
            $table->integer('waste_type_id')->index('user_deposits_waste_type_id_foreign_idx');
            $table->decimal('weight')->nullable();
            $table->integer('points_earned')->nullable();
            $table->dateTime('deposit_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_deposits');
    }
};
