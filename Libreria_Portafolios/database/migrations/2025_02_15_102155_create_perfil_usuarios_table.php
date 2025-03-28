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
        Schema::create('perfil_usuarios', function (Blueprint $table) {
            $table->id('id_perfil');
            $table->string('nombre', 255);
            $table->string('direccion');
            $table->string('telefono');
            $table->string('foto_perfil');
            $table->unsignedBigInteger('id_usuario');
            $table->timestamps();


            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios')->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perfil_usuarios');
    }
};
