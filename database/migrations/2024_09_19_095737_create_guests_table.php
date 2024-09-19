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
        Schema::create('guests', function (Blueprint $table) {
            $table->ulid('id');
            $table->string('name');
            $table->string('id_type'); //KTP, SIM etc
            $table->bigInteger('id_number');
            $table->binary('person_image');
            $table->integer('status'); // Allowed, Not Aallowed 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guests');
    }
};
