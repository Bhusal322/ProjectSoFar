<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->id(); // Creates an 'id' column that is an auto-incrementing integer and primary key
            $table->unsignedBigInteger('seller_id'); // Use unsignedBigInteger for foreign key
            $table->string('job_title'); // Equivalent to VARCHAR(255)
            $table->string('company_name')->nullable(); // Nullable VARCHAR(255)
            $table->text('description')->nullable(); // Nullable TEXT
            $table->foreign('seller_id')->references('id')->on('persons')->onDelete('cascade');
            $table->timestamps(); // Optional: creates 'created_at' and 'updated_at' columns
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('experiences');
    }
}
