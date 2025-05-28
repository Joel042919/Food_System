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
        Schema::create('dishes', function (Blueprint $table) {
            $table->id('idDishes');
            $table->string('dishName',30);
            $table->decimal('price',5,2);
            $table->unsignedBigInteger('idCategory');
            $table->integer('status');
            $table->text('dishImg');
            $table->text('details');
            
            $table->foreign('idCategory')
                ->references('idCategory')
                ->on('Category')
                ->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dishes');
    }
};
