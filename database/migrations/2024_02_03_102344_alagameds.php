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
        Schema::create('alagameds', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->default(''); // changed 'gmail' to 'email'
            $table->date('AppointmentDate'); // changed 'birthdate' to 'AppointmentDate'
            $table->string('phone_number');
            $table->string('services');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
