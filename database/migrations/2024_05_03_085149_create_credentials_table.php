<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCredentialsTable extends Migration
{
    public function up()
    {
        Schema::create('credentials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('seller_id')->constrained('persons')->onDelete('cascade');
            $table->string('credential_name', 255);
            $table->string('institution_name', 255);
            $table->timestamps();
        });
    }

    public function down()
    {

        Schema::dropIfExists('credentials');
    }
}