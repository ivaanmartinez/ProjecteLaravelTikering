<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->string('especie');
            $table->string('pais');
            $table->integer('poblacio');
            $table->integer('amenaca');
            $table->integer('estat');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('animals');
    }
};
