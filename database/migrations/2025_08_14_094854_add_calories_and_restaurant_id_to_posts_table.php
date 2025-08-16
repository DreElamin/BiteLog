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
        Schema::table('posts', function (Blueprint $table) {
            // Add a column for calorie count for each meal post
            $table->decimal('calories', 8, 2)->nullable(); // Allows for values like 12345.67, can be null

            // Add a foreign key column to link posts to restaurants
            // unsignedBigInteger is used for foreign keys that reference an auto-incrementing primary key
            $table->unsignedBigInteger('restaurant_id')->nullable(); 

            // Define the foreign key constraint:
            // 'restaurant_id' in 'posts' table references 'id' in 'restaurants' table
            // onDelete('cascade') means if a restaurant is deleted, all associated posts will also be deleted
            $table->foreign('restaurant_id')->references('id')->on('restaurants')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            // When rolling back, always drop foreign key constraints BEFORE dropping the columns
            $table->dropForeign(['restaurant_id']); // Drops the foreign key constraint
            $table->dropColumn('restaurant_id');    // Drops the 'restaurant_id' column
            $table->dropColumn('calories');         // Drops the 'calories' column
        });
    }
};