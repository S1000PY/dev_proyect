<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LenguajesDeProgramacionSeeder extends Seeder
{
    public function run()
    {
        DB::table('lenguajes_de_programacion')->insert([
            ['nombre' => 'Python', 'version' => '3.9'],
            ['nombre' => 'JavaScript', 'version' => 'ES6'],
            ['nombre' => 'Java', 'version' => '11'],
            ['nombre' => 'C#', 'version' => '8.0'],
            ['nombre' => 'Ruby', 'version' => '2.7']
        ]);
    }
};