<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('client')->insert([
            ['idClient' => 'CLI002', 'names' => 'Samuel Julian', 'surnames' => 'Font', 'picture' => null],
        ]);
    }
}
