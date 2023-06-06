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
        Schema::create('detalles_pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('prefijo');
            $table->integer('num_pedido');
            $table->string('perfil');
            $table->string('familia');
            $table->string('grupo');
            $table->string('subgrupo');
            $table->integer('id_producto');
            $table->string('descripcion');
            $table->string('iva');
            $table->string('total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalles_pedidos');
    }
};
