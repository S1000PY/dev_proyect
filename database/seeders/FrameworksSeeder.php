<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FrameworksSeeder extends Seeder
{
    public function run()
    {
        DB::table('frameworks')->insert([
            ['nombre' => 'Django', 'version' => '3.1', 'lenguaje_programacion_id' => 1], // Asumiendo que Python tiene el id 1
            ['nombre' => 'React', 'version' => '17.0', 'lenguaje_programacion_id' => 2], // Asumiendo que JavaScript tiene el id 2
            ['nombre' => 'Spring Boot', 'version' => '2.3', 'lenguaje_programacion_id' => 3], // Asumiendo que Java tiene el id 3
            ['nombre' => '.NET Core', 'version' => '5.0', 'lenguaje_programacion_id' => 4], // Asumiendo que C# tiene el id 4
            ['nombre' => 'Rails', 'version' => '6.0', 'lenguaje_programacion_id' => 5] // Asumiendo que Ruby tiene el id 5
        ]);
    }
};