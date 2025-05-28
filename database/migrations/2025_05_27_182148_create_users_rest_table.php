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
        Schema::create('users_rest', function (Blueprint $table) {
            // Si quieres que sea autoincremental: $table->id();
            // Si quieres que sea un INT que tú controlas: $table->integer('id')->primary();
            $table->id('id');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('owner_id',20);
            $table->string('owner_type');
            $table->rememberToken();
            $table->string('auth_provider',30)->nullable();
            $table->string('auth_provider_id',30)->nullable();

            // Índice para la relación polimórfica (opcional pero recomendado)
            $table->index(['owner_id','owner_type']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_rest');
    }
};
