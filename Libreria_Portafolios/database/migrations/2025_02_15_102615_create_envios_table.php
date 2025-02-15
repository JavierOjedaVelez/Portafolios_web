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
        Schema::create('envios', function (Blueprint $table) {
            $table->id('id_envio');
            $table->unsignedBigInteger('id_pedido');
            $table->string('metodo_envio');
            $table->string('codigo_seguimiento');
            $table->date('fecha_envio');
            $table->date('fecha_entrega_estimada');
            $table->timestamps();

            $table->foreign('id_pedido')->references('id_pedido')->on('pedidos')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('envios');
    }
};
