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
        Schema::create('guest_visits', function (Blueprint $table) {
            $table->ulid('id');
            $table->foreignUlid('id_guest'); 
            $table->string('reason');
            $table->foreignUlid('id_user')->nullable(); // appointment employee id
            $table->dateTime('clock_in');
            $table->dateTime('clock_out');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guest_visits');
    }
};
