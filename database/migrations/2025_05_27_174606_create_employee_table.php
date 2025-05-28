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
        Schema::create('employee', function (Blueprint $table) {
            $table->string('idEmployee',20)->primary();
            $table->string('names',40);
            $table->string('surnames',40);
            $table->boolean('status');
            $table->unsignedBigInteger('idPosition');
            $table->longText('photo_url')->nullable();
            
            $table->foreign('idPosition')
                ->references('idPosition')
                ->on('Position')
                ->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee');
    }
};
