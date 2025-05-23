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


        Schema::create('flights', function (Blueprint $table) {
           $table->id();
           $table->string('flight_code', 3)->unique();
           $table->string('origins', 3)->unique();
           $table->string('destination', 3)->unique();
           $table->dateTime('departure_time');
           $table->dateTime('arrival_time');
           $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};