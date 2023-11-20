<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/* class FrameworksSeeder extends Seeder
{
    public function run()
    {
        DB::table('frameworks')->insert([
            ['nombre' => 'Django', 'version' => '3.1', 'lenguaje_programacion_id' => 1],
            // Asumiendo que Python tiene el id 1
            ['nombre' => 'React', 'version' => '17.0', 'lenguaje_programacion_id' => 2], 
            // Asumiendo que JavaScript tiene el id 2
            ['nombre' => 'Spring Boot', 'version' => '2.3', 'lenguaje_programacion_id' => 3],
             // Asumiendo que Java tiene el id 3
            ['nombre' => '.NET Core', 'version' => '5.0', 'lenguaje_programacion_id' => 4], 
            // Asumiendo que C# tiene el id 4
            ['nombre' => 'Rails', 'version' => '6.0', 'lenguaje_programacion_id' => 5] // Asumiendo que Ruby tiene el id 5
        ]);
    }
}; */

class FrameworksSeeder extends Seeder
{
    public function run()
    {
        DB::table('frameworks')->insert([
            [
                'nombre' => 'Laravel', 
                'version' => '8.x',
                'pagina_web_url' => 'https://laravel.com',
                'logo_url' => 'https://laravel.com/img/logomark.min.svg',
                'lenguaje_programacion_id' => 1
            ],
            [
                'nombre' => 'React', 
                'version' => '17.x',
                'pagina_web_url' => 'https://reactjs.org',
                'logo_url' => 'https://reactjs.org/logo-og.png',
                'lenguaje_programacion_id' => 2
            ],
            [
                'nombre' => 'Angular', 
                'version' => '11.x',
                'pagina_web_url' => 'https://angular.io',
                'logo_url' => 'https://angular.io/assets/images/logos/angular/angular.png',
                'lenguaje_programacion_id' => 2
            ],
            [
                'nombre' => 'Django', 
                'version' => '3.1.x',
                'pagina_web_url' => 'https://www.djangoproject.com',
                'logo_url' => 'https://www.djangoproject.com/m/img/logos/django-logo-positive.png',
                'lenguaje_programacion_id' => 4
            ],
            [
                'nombre' => 'Spring Boot', 
                'version' => '2.4.x',
                'pagina_web_url' => 'https://spring.io/projects/spring-boot',
                'logo_url' => 'https://upload.wikimedia.org/wikipedia/commons/4/44/Spring_Framework_Logo_2018.svg',
                'lenguaje_programacion_id' => 3
            ]
        ]);
    }
};