<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Seeders\AreaConocimiento;

class AreaConocimientoSeeder extends Seeder
{
    public function run()
    {
        AreaConocimiento::create([
            'idArea' => 'Inf',
            'descripcion' => 'Infantiles',
        ]);

        AreaConocimiento::create([
            'idArea' => 'Ter',
            'descripcion' => 'Terror',
        ]);

        // Agrega más registros según tus necesidades
    }
   
}
