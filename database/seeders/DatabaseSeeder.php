<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use FrameworksPorProyectosSeeder;
use FrameworksSeeder;
use Illuminate\Database\Seeder;
use LenguajesDeProgramacionSeeder;
use ProyectosSeeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            LenguajesDeProgramacionSeeder::class,
            ProyectosSeeder::class,
            FrameworksSeeder::class,
            FrameworksPorProyectosSeeder::class
        ]);
    }
}