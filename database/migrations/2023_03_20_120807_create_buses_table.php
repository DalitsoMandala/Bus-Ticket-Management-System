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
        Schema::create('buses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('model');
            $table->string('brand');
            $table->string('serial_number');
            $table->unsignedInteger('seats');
            $table->string('condition');
            $table->foreignId('route_id')->nullable()->constrained('routes');
            $table->foreignId('schedule_id')->nullable()->constrained('schedules');
            $table->boolean('is_full')->default(false)->nullable();
            $table->date('date_departing')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buses');
    }
};
