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
        Schema::create('pedido_libros', function (Blueprint $table) {
            $table->id('id_pedido_libros');
            $table->unsignedBigInteger('isbn');
            $table->unsignedBigInteger('id_pedido');

            $table->foreign('isbn')->references('isbn')->on('libros')->onDelete('cascade');
            $table->foreign('id_pedido')->references('id_pedido')->on('pedidos')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido_libros');

    }
};
