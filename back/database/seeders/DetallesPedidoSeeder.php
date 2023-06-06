<?php

namespace Database\Seeders;

use App\Models\detalles_pedidos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetallesPedidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $new = new detalles_pedidos();
        $new->prefijo = "1";
        $new->num_pedido = "1";
        $new->perfil = "perfil";
        $new->familia = "familia 1";
        $new->grupo = "grupo 1";
        $new->subgrupo = "subgrupo 1";
        $new->id_producto = "1";
        $new->descripcion = "descripcion";
        $new->iva = "1";
        $new->total = "1.000";
        // $new->create_id = "1";
        // $new->update_id = "1";
        $new->save();
    }
}
