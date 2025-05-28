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
        Schema::create('pedido', function (Blueprint $table) {
            $table->id('idPedido');
            $table->unsignedBigInteger('idMesa');
            $table->dateTime('fechaPedido');
            $table->text('details')->nullable();
            $table->string('idEmployee',20);
            $table->integer('estadoPedido')->default(1);
            
            $table->foreign('idMesa')
                ->references('idMesa')
                ->on('mesa')
                ->onDelete('cascade');

            $table->foreign('idEmployee')
                ->references('idEmployee')
                ->on('Employee')
                ->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido');
    }
};
