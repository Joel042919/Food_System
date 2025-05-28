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
        Schema::create('pago', function (Blueprint $table) {
            $table->id('idPago');
            $table->decimal('montoAPagar',8,2);
            $table->unsignedBigInteger('idPedido');
            $table->dateTime('fechaPago');
            $table->unsignedBigInteger('idTipoPago');
            
            $table->foreign('idTipoPago')
                ->references('idTipoPago')
                ->on('tipo_pago')
                ->onDelete('no action');
            
            $table->foreign('idPedido')
                ->references('idPedido')
                ->on('pedido')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pago');
    }
};
