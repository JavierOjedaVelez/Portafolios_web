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
        Schema::create('libros', function (Blueprint $table) {
            $table->id('isbn');
            $table->string('titulo');
            $table->float('precio');
            $table->integer('stock');
            $table->text('sinopsis');
            $table->string('portada');
            $table->date('fecha_publicacion');
            $table->unsignedBigInteger('id_tipo_libro');
            $table->unsignedBigInteger('id_edicion');
            $table->timestamps();

            $table->foreign('id_edicion')->references('id_edicion')->on('ediciones')->onDelete('cascade');
            $table->foreign('id_tipo_libro')->references('id_tipo_libro')->on('tipo_libros')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libros');
    }
};
