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
        Schema::create('usuario_libro_guardados', function (Blueprint $table) {
            $table->id('id_usuario_libro_guardado');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_libro_guardado');

            $table->foreign('id_libro_guardado')->references('id_libros_guardados')->on('libro_guardados')->onDelete('cascade');
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario_libro_guardados');

    }
};
