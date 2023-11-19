<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FrameworksPorProyectosSeeder extends Seeder
{
    public function run()
    {
        DB::table('frameworks_por_proyectos')->insert([
            ['framework_id' => 1, 'proyecto_id' => 1, 'descripcion' => 'Uso de Laravel en Proyecto'],
            ['framework_id' => 2, 'proyecto_id' => 2, 'descripcion' => 'Uso de React en Proyecto'],
            ['framework_id' => 3, 'proyecto_id' => 3, 'descripcion' => 'Uso de Angular en Proyecto'],
            ['framework_id' => 4, 'proyecto_id' => 4, 'descripcion' => 'Uso de Django en Proyecto'],
            ['framework_id' => 5, 'proyecto_id' => 5, 'descripcion' => 'Uso de Spring Boot en Proyecto']
        ]);
    }
};