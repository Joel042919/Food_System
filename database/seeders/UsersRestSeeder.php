<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersRestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users_rest')->insert([
            [
                'username' => 'joseEconomy',
                'password' => Hash::make('1234'), // Cambiar 'password' por una contraseña segura
                'owner_id' => 'EMP003',
                'owner_type' => 'App\\Models\\Employee', // Asegúrate que el namespace del modelo sea correcto
                'remember_token' => null,
                'auth_provider' => null,
                'auth_provider_id' => null,
            ],
            [
                'username' => 'juliaW',
                'password' => Hash::make('1234'),
                'owner_id' => 'EMP004',
                'owner_type' => 'App\\Models\\Employee',
                'remember_token' => null,
                'auth_provider' => null,
                'auth_provider_id' => null,
            ],
            [
                 'username' => 'sergioFe',
                'password' => Hash::make('1234'),
                'owner_id' => 'EMP005',
                'owner_type' => 'App\\Models\\Employee',
                'remember_token' => null,
                'auth_provider' => null,
                'auth_provider_id' => null,
            ],
        ]);
    }
}
