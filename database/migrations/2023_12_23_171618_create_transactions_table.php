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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->index('user_deposits_user_id_foreign_idx')->nullable();
            $table->integer('waste_type_id')->index('user_deposits_waste_type_id_foreign_idx')->nullable();
            $table->enum('transaction_type',['Setoran','Penarikan'])->nullable();
            $table->decimal('weight')->nullable();
            $table->integer('point_earned')->nullable();
            $table->dateTime('transaction_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
