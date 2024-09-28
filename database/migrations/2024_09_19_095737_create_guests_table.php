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
            $table->string('identity_type'); //KTP, SIM etc
            $table->bigInteger('identity_number');
            $table->binary('person_image')->nullable();
            $table->integer('status')->default(1); // Allowed, Not Aallowed 
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
