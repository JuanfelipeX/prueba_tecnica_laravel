<?php

namespace Database\Seeders;

use App\Models\sucursales;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SucursaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $new = new sucursales();
        $new->nit = "1";
        $new->telefono = "11111";
        $new->direccion = "direccion";
        $new->departamento = "departamento";
        $new->ciudad = "ciudad";
        $new->save();
    }
}
