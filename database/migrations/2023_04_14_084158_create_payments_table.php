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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_id');
            $table->unsignedFloat('price', 8, 2);
            $table->unsignedFloat('amount_paid', 8, 2);
            $table->unsignedFloat('tax_amount', 8, 2)->default(0.00);
            $table->string('currency', 3);
            $table->string('local_currency', 3)->nullable();
            $table->boolean('payment_status');
            $table->string('payment_method');
            $table->foreignId('customer_id')->constrained();
            $table->json('customer_data')->nullable();
            $table->boolean('is_complete')->default(false);
            $table->longText('file_name')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
