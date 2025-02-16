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
        Schema::create('libro_guardados', function (Blueprint $table) {
            $table->id('id_libros_guardados');
            $table->unsignedBigInteger('isbn');
            $table->date('fecha_guardado');
            $table->timestamps();

            $table->foreign('isbn')->references('isbn')->on('libros')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libro_guardados');
    }
};
