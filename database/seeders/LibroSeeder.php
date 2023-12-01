<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Libro::create([
            'ISBN' => '12345',
            'nombre' => 'El principito',
            'descripcion' => 'libro infantil',
            'genero_literario' => 'Infantil',
            'precio_unitario' => 25.000,
            'observacion' => 'Nuevo',
            'foto' => 'imagen1.jpg',
            'area' => 'Inf',
        ]);

        Libro::create([
            'ISBN' => '67890',
            'nombre' => 'La muerte',
            'descripcion' => 'libro de terror',
            'genero_literario' => 'Terror',
            'precio_unitario' => 35.000,
            'observacion' => 'Seminuevo',
            'foto' => 'imagen2.jpg',
            'area' => 'Ter',
        ]);
    }
}
