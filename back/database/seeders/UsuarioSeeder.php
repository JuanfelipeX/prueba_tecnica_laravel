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
        usuarios::firstOrCreate(
            ['email' => 'adm@gmail.com'],
            [
                'usuario' => '1',
                'contrasena' => '1234',
                'rol_usuario' => 'tipo',
                'activo' => 'activo',
            ]
        );
    }
}
