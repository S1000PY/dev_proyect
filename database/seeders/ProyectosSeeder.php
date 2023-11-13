<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProyectosSeeder extends Seeder
{
    public function run()
    {
        DB::table('proyectos')->insert([
            ['nombre' => 'Proyecto Alpha', 'descripcion' => 'Descripción del Proyecto Alpha'],
            ['nombre' => 'Proyecto Beta', 'descripcion' => 'Descripción del Proyecto Beta'],
            ['nombre' => 'Proyecto Gamma', 'descripcion' => 'Descripción del Proyecto Gamma'],
            ['nombre' => 'Proyecto Delta', 'descripcion' => 'Descripción del Proyecto Delta'],
            ['nombre' => 'Proyecto Epsilon', 'descripcion' => 'Descripción del Proyecto Epsilon']
        ]);
    }
};