<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pago')->insert([
            ['montoAPagar' => 67.50, 'idPedido' => 1, 'fechaPago' => '2025-04-27 22:35:18', 'idTipoPago' => 1],
            ['montoAPagar' => 57.50, 'idPedido' => 2, 'fechaPago' => '2025-04-30 10:42:20', 'idTipoPago' => 1],
            ['montoAPagar' => 28.50, 'idPedido' => 5, 'fechaPago' => '2025-05-06 11:41:09', 'idTipoPago' => 1],
            ['montoAPagar' => 40.00, 'idPedido' => 7, 'fechaPago' => '2025-05-06 11:44:45', 'idTipoPago' => 1],
        ]);
    }
}
