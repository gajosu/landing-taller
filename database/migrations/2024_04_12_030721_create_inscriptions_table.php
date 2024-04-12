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
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();
            $table->string('event_city');
            $table->string('firstname');
            $table->string('lastname');
            $table->date('birthday');
            $table->string('cedula')->unique();
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('specialty');
            $table->string('business_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscriptions');
    }
};
