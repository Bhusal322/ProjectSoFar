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
        Schema::create('experiences', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->unsignedBigInteger('seller_id'); // Assuming 'id' in 'persons' is of type BigInteger
            $table->string('job_title', 255); // VARCHAR 255 for job title, not nullable
            $table->string('company_name', 255); // VARCHAR 255 for company name, not nullable
            $table->text('description')->nullable(); // TEXT for description, nullable
      

            // Foreign key constraint
            $table->foreign('seller_id')->references('id')->on('persons')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiences');
    }
};
