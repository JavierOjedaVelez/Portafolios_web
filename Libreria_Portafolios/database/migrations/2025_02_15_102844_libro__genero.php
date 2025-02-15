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
        Schema::create('libro_generos', function (Blueprint $table) {
            $table->id('id_libro_generos');
            $table->unsignedBigInteger('isbn');
            $table->unsignedBigInteger('id_genero');

            $table->foreign('isbn')->references('isbn')->on('libros')->onDelete('cascade');
            $table->foreign('id_genero')->references('id_genero')->on('generos')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libro_generos');

    }
};
