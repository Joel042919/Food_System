<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('position')->insert([
            ['position' => 'Mesero', 'idDepartment' => 1],
            ['position' => 'Cajero', 'idDepartment' => 2],
            ['position' => 'Cocinero', 'idDepartment' => 3],
        ]);
    }
}
