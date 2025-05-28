<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetallePedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('detalle_pedido')->insert([
            ['idDetallePedido' => 1, 'idPedido' => 1, 'idDishes' => 10, 'price' => 7.00, 'quantity' => 1],
            ['idDetallePedido' => 2, 'idPedido' => 1, 'idDishes' => 14, 'price' => 7.50, 'quantity' => 1],
            ['idDetallePedido' => 3, 'idPedido' => 1, 'idDishes' => 24, 'price' => 13.00, 'quantity' => 1],
            ['idDetallePedido' => 4, 'idPedido' => 1, 'idDishes' => 28, 'price' => 20.00, 'quantity' => 2],
            ['idDetallePedido' => 5, 'idPedido' => 2, 'idDishes' => 14, 'price' => 7.50, 'quantity' => 1],
            ['idDetallePedido' => 6, 'idPedido' => 2, 'idDishes' => 16, 'price' => 5.00, 'quantity' => 2],
            ['idDetallePedido' => 7, 'idPedido' => 2, 'idDishes' => 18, 'price' => 12.00, 'quantity' => 1],
            ['idDetallePedido' => 8, 'idPedido' => 2, 'idDishes' => 20, 'price' => 14.00, 'quantity' => 1],
            ['idDetallePedido' => 9, 'idPedido' => 2, 'idDishes' => 26, 'price' => 14.00, 'quantity' => 1],
            ['idDetallePedido' => 10, 'idPedido' => 3, 'idDishes' => 6, 'price' => 10.00, 'quantity' => 2],
            ['idDetallePedido' => 11, 'idPedido' => 3, 'idDishes' => 8, 'price' => 8.50, 'quantity' => 1],
            ['idDetallePedido' => 12, 'idPedido' => 4, 'idDishes' => 6, 'price' => 10.00, 'quantity' => 2],
            ['idDetallePedido' => 13, 'idPedido' => 4, 'idDishes' => 8, 'price' => 8.50, 'quantity' => 1],
            ['idDetallePedido' => 14, 'idPedido' => 4, 'idDishes' => 10, 'price' => 7.00, 'quantity' => 1],
            ['idDetallePedido' => 15, 'idPedido' => 5, 'idDishes' => 6, 'price' => 10.00, 'quantity' => 2],
            ['idDetallePedido' => 16, 'idPedido' => 5, 'idDishes' => 8, 'price' => 8.50, 'quantity' => 1],
            ['idDetallePedido' => 17, 'idPedido' => 6, 'idDishes' => 2, 'price' => 20.00, 'quantity' => 1],
            ['idDetallePedido' => 18, 'idPedido' => 6, 'idDishes' => 8, 'price' => 8.50, 'quantity' => 1],
            ['idDetallePedido' => 19, 'idPedido' => 7, 'idDishes' => 2, 'price' => 20.00, 'quantity' => 1],
            ['idDetallePedido' => 20, 'idPedido' => 7, 'idDishes' => 4, 'price' => 10.00, 'quantity' => 2],
            ['idDetallePedido' => 21, 'idPedido' => 8, 'idDishes' => 2, 'price' => 20.00, 'quantity' => 2],
            ['idDetallePedido' => 22, 'idPedido' => 8, 'idDishes' => 6, 'price' => 10.00, 'quantity' => 1],
            ['idDetallePedido' => 23, 'idPedido' => 9, 'idDishes' => 14, 'price' => 7.50, 'quantity' => 1],
            ['idDetallePedido' => 24, 'idPedido' => 9, 'idDishes' => 16, 'price' => 5.00, 'quantity' => 2],
        ]);
    }
}
