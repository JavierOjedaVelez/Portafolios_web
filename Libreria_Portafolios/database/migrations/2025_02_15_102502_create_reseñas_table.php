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
        Schema::create('reseñas', function (Blueprint $table) {
            $table->id('id_reseña');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('isbn');
            $table->decimal('puntuacion',2,1);
            $table->text('comentario')->nullable();
            $table->timestamps();


            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios')->onDelete('cascade');
            $table->foreign('isbn')->references('isbn')->on('libros')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reseñas');
    }
};
