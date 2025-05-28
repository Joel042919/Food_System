<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; // Para contraseñas en UsersRestSeeder
use Carbon\Carbon; // Para fechas

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category')->insert([
            ['category' => 'Dessert', 'categoryUrl' => 'img/categoryIcon/dessert.svg'],
            ['category' => 'Beverage', 'categoryUrl' => 'img/categoryIcon/beverage.svg'],
            ['category' => 'Main Dish', 'categoryUrl' => 'img/categoryIcon/mainDish.svg'],
            ['category' => 'Salad', 'categoryUrl' => 'img/categoryIcon/salad.svg'],
            ['category' => 'Soup', 'categoryUrl' => 'img/categoryIcon/soup.svg'],
        ]);
    }
}
