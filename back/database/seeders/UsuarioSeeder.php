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
        // usuarios::firstOrCreate(
        //     ['email' => 'adm@gmail.com'],
        //     [
        //         'usuario' => '1',
        //         'contrasena' => '1234',
        //         'rol_usuario' => 'tipo',
        //         'activo' => 'activo',
        //     ]
        // );

        $new = new usuarios();
        $new->email = "adm@gmail.com";
        $new->usuario = "adm";
        $new->contrasena = "1234";
        $new->rol_usuario = "rol usuario";
        $new->activo = "activo";
        $new->save();

    }
}
