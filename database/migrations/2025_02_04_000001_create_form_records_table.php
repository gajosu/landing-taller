<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('form_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('form_id')->constrained()->onDelete('cascade');
            $table->string('firstname');
            $table->string('lastname');
            $table->date('birthday');
            $table->string('cedula');
            $table->string('phone');
            $table->string('email');
            $table->string('specialty');
            $table->string('business_type');
            $table->string('status')->default('pending');
            $table->timestamps();

            // Índices para búsquedas comunes
            $table->index('cedula');
            $table->index('email');
            $table->index('status');
            $table->string('city')->nullable();

            // Asegurar que no haya duplicados por formulario
            $table->unique(['form_id', 'cedula']);
            $table->unique(['form_id', 'email']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('form_records');
    }
};
