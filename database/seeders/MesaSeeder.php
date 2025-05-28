<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mesa')->insert([
            ['mesa' => 34],
            ['mesa' => 35],
            ['mesa' => 36],
            ['mesa' => 37],
            ['mesa' => 38],
            ['mesa' => 39],
            ['mesa' => 40],
            ['mesa' => 41],
            ['mesa' => 42],
            ['mesa' => 43],
            ['mesa' => 44],
        ]);
    }
}
