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
        Schema::create('gold_transactions', function (Blueprint $table) {
            $table->id();
            $table->enum('transaction_type', ['buy', 'sell']); // Transaction type (buy or sell)
            $table->decimal('gold_weight_tola', 15, 2); // Gold weight in tola
            $table->decimal('gold_weight_ounce', 15, 2); // Gold weight in ounce
            $table->decimal('price_per_tola', 15, 2); // Price per tola
            $table->decimal('price_per_ounce', 15, 2); // Price per ounce
            $table->decimal('total_amount', 15, 2); // Total transaction amount
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gold_transactions');
    }
};
