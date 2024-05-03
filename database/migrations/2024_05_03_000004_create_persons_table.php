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
        Schema::create('persons', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('first_name', 255); // VARCHAR 255 for first name
            $table->string('last_name', 255); // VARCHAR 255 for last name
            $table->string('email', 255)->unique(); // Unique VARCHAR 255 for email
            $table->enum('type', ['buyer', 'seller']); // ENUM for type
            $table->string('password', 255); // VARCHAR 255 for password
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persons');
    }
};

