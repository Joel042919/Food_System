<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employee')->insert([
            ['idEmployee' => 'EMP002', 'names' => 'Andrea', 'surnames' => 'Grr', 'status' => 1, 'idPosition' => 1, 'photo_url' => null],
            ['idEmployee' => 'EMP003', 'names' => 'Jose', 'surnames' => 'Ferrer Culqui', 'status' => 1, 'idPosition' => 2, 'photo_url' => null],
            ['idEmployee' => 'EMP004', 'names' => 'Julia', 'surnames' => 'Galarza Hilo', 'status' => 1, 'idPosition' => 1, 'photo_url' => null],
            ['idEmployee' => 'EMP005', 'names' => 'Sergio', 'surnames' => 'Ferrer Cosme', 'status' => 1, 'idPosition' => 3, 'photo_url' => null],
        ]);
    }
}
