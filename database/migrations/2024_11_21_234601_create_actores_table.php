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
        Schema::create('actores', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom_act',60);
            $table->string('pelfa_act',60);
            $table->string('desc_act',250);
            $table->string('imagen_act');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actores');
    }
};
