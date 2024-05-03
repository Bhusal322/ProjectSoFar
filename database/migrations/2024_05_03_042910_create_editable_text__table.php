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
        Schema::create('editable_texts', function (Blueprint $table) {
            $table->id(); // Auto-incrementing ID
            $table->string('title', 255)->nullable(); // VARCHAR 255 for title, nullable
            $table->text('content')->nullable(); // TEXT for content, nullable
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('editable_texts');
    }
};

