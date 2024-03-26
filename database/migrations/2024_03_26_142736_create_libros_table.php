<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('libros', function (Blueprint $table) {
        $table->id();
        $table->string('titulo');
        $table->unsignedBigInteger('autor_id');
        $table->unsignedBigInteger('categoria_id');
        $table->foreign('autor_id')->references('id')->on('autores')->onDelete('cascade');
        $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
        $table->timestamps();
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
