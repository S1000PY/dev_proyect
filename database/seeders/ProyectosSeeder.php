<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProyectosSeeder extends Seeder
{
    public function run()
    {
        $fechaHoy = Carbon::today()->toDateString();
        $fechaFutura = Carbon::today()->addDays(30)->toDateString(); //30 días después de la actual fecha

        DB::table('proyectos')->insert([
            [
                'nombre' => 'Proyecto Tiktok', 
                'descripcion' => 'Descripción del Tiktok del delegado',
                'fecha_desde' => $fechaHoy,
                'fecha_hasta' => $fechaFutura, 
                'activo' => true,
                'encargado' => 'Encargado Delegado'
            ],
            [
                'nombre' => 'Proyecto Americana', 
                'descripcion' => 'delete sin where by samaniego',
                'fecha_desde' => $fechaHoy,
                'fecha_hasta' => $fechaFutura, 
                'activo' => true,
                'encargado' => 'Encargado Osmar'
            ],
            [
                'nombre' => 'Proyecto React', 
                'descripcion' => 'Descripción del Proyecto web',
                'fecha_desde' => $fechaHoy,
                'fecha_hasta' => $fechaFutura, 
                'activo' => true,
                'encargado' => 'Encargado TheKing'
            ],
            [
                'nombre' => 'Proyecto React Native', 
                'descripcion' => 'Descripción del Proyecto App',
                'fecha_desde' => $fechaHoy,
                'fecha_hasta' => $fechaFutura, 
                'activo' => true,
                'encargado' => 'Encargado TheKing'
            ],
            [
                'nombre' => 'Proyecto Ecommerce', 
                'descripcion' => 'Descripción del Proyecto Ecommerce',
                'fecha_desde' => $fechaHoy,
                'fecha_hasta' => $fechaFutura, 
                'activo' => true,
                'encargado' => 'Encargado TheKing'
            ]
        ]);
    }
};