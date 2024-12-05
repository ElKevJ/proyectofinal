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
        Schema::create('peliculas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom_pel',60);
            $table->string('sinop_pel',250);
            $table->string('dura_pel',10);
            $table->string('cat_pel');
            $table->string('clas_pel',20);
            $table->string('imagen_pel');

        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peliculas');
    }
};
