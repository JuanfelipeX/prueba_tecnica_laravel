<?php

namespace Database\Seeders;

use App\Models\terceros;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TerceroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $new = new terceros();
        $new->nit = "1";
        $new->razon_social = "razon social";
        $new->tipo = "tipo";
        $new->activo = "activo";
        $new->save();
    }
}
