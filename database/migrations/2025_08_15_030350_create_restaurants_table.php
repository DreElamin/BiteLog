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
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key for the restaurant
            $table->string('name'); // Name of the restaurant (required)
            $table->string('address')->nullable(); // Address of the restaurant (optional, can be null)
            $table->text('description')->nullable(); // Description or notes about the restaurant (optional, can be null)
            $table->timestamps(); // Adds 'created_at' and 'updated_at' columns for timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // When rolling back, this will drop the 'restaurants' table if it exists
        Schema::dropIfExists('restaurants');
    }
};