<?php

namespace Database\Seeders;

use App\Models\usuarios;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $new = new usuarios();
        $new->usuario = "1";
        $new->contrasena = "1234";
        $new->rol_usuario = "tipo";
        $new->activo = "activo";
        $new->email = "adm@gmail.com";
        $new->save();
    }
}
