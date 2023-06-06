<?php

namespace Database\Seeders;

use App\Models\pedidos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $new = new pedidos();
        $new->fecha_pedido = "01-01-23";
        $new->prefijo = "1";
        $new->num_pedido = "1";
        $new->nit = "1";
        $new->razon_social = "razon social";
        $new->vendedor = "vendedor";
        $new->departamento = "departamento";
        $new->ciudad = "ciudad";
        $new->save();
        
    }
}
