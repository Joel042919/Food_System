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
        Schema::create('detalle_pedido', function (Blueprint $table) {
            $table->id('idDetallePedido');
            $table->unsignedBigInteger('idPedido');
            $table->unsignedBigInteger('idDishes');
            $table->decimal('price',8,2);
            $table->integer('quantity');

            $table->foreign('idPedido')
                ->references('idPedido')
                ->on('Pedido')
                ->onDelete('cascade');
            
            $table->foreign('idDishes')
                ->references('idDishes')
                ->on('Dishes')
                ->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_pedido');
    }
};
