<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pedido')->insert([
            ['idMesa' => 1, 'fechaPedido' => '2025-04-27 18:26:33', 'details' => 'Bien cocido el grilled chicken', 'idEmployee' => 'EMP004', 'estadoPedido' => 1],
            ['idMesa' => 2, 'fechaPedido' => '2025-04-27 18:39:45', 'details' => null, 'idEmployee' => 'EMP004', 'estadoPedido' => 1],
            ['idMesa' => 3, 'fechaPedido' => '2025-04-27 18:46:45', 'details' => null, 'idEmployee' => 'EMP004', 'estadoPedido' => 1],
            ['idMesa' => 4, 'fechaPedido' => '2025-04-27 18:53:13', 'details' => null, 'idEmployee' => 'EMP004', 'estadoPedido' => 1],
            ['idMesa' => 5, 'fechaPedido' => '2025-04-27 18:54:13', 'details' => null, 'idEmployee' => 'EMP004', 'estadoPedido' => 1],
            ['idMesa' => 6, 'fechaPedido' => '2025-04-27 18:58:26', 'details' => null, 'idEmployee' => 'EMP004', 'estadoPedido' => 1],
            ['idMesa' => 7, 'fechaPedido' => '2025-04-27 18:59:39', 'details' => null, 'idEmployee' => 'EMP004', 'estadoPedido' => 1],
            ['idMesa' => 8, 'fechaPedido' => '2025-04-27 19:01:57', 'details' => null, 'idEmployee' => 'EMP004', 'estadoPedido' => 1],
            ['idMesa' => 9, 'fechaPedido' => '2025-04-27 19:02:13', 'details' => null, 'idEmployee' => 'EMP004', 'estadoPedido' => 1],
        ]);
    }
}
