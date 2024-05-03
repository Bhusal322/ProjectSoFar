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
        Schema::create('credentials', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->unsignedBigInteger('seller_id'); // Foreign key to persons table
            $table->string('credential_name', 255); // VARCHAR 255 for credential name, not nullable
            $table->string('institution_name', 255); // VARCHAR 255 for institution name, not nullable
           

            // Foreign key constraint
            $table->foreign('seller_id')->references('id')->on('persons')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('credentials');
    }
};

