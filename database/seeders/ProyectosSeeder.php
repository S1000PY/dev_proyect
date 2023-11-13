<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProyectosSeeder extends Seeder
{
    public function run()
    {
        DB::table('proyectos')->insert([
            ['nombre' => 'Proyecto Tiktok', 'descripcion' => 'Descripción del Tiktok del delegado'],
            ['nombre' => 'Proyecto Americana', 'descripcion' => 'delete sin where by samaniego'],
            ['nombre' => 'Proyecto React', 'descripcion' => 'Descripción de Contiweb'],
            ['nombre' => 'Proyecto React Native', 'descripcion' => 'Descripción de ContiApp'],
            ['nombre' => 'Proyecto Ecommerce', 'descripcion' => 'Descripción del ecommerce de chetos']
        ]);
    }
};