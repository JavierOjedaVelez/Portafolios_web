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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('id_usuario');
            $table->string('email',255)->unique();
            $table->string('password');
            $table->date('fecha_registro');
            $table->unsignedBigInteger('tipo_usuario_id');
            $table->boolean('baneado');
            $table->timestamps();

            $table->foreign('tipo_usuario_id')->references('id_tipo_usuario')->on('tipo_usuarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
