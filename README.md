dev_proyect
* Se genera el proyecto con composer create-project laravel/laravel dev_proyect
* Configurar el .env con las credenciales de la bd trabajo4
* Migraciones de acuerdo al DER proporcionado
	php artisan make:migration create_lenguajes_de_programacion_table --create=lenguajes_de_programacion
	php artisan make:migration create_frameworks_table --create=frameworks
	php artisan make:migration create_frameworks_por_proyectos_table --create=frameworks_por_proyectos
	php artisan make:migration create_proyectos_table --create=proyectos
* Configurar migraciones de acuerdo al DER proporcionado
* crear los seeder con los 5 inserts mencionandos
	php artisan make:seeder LenguajesDeProgramacionSeeder
	php artisan make:seeder ProyectosSeeder
	php artisan make:seeder FrameworksSeeder
	php artisan make:seeder FrameworksPorProyectosSeeder
	ejecutar para el seeder php artisan db:seed
* Crear modelos
	php artisan make:model LenguajeDeProgramacion
	php artisan make:model Framework
	php artisan make:model FrameworkPorProyecto
	php artisan make:model Proyecto
* Modificar modelos segun relaciones, tipos y nombres de acuerdo al DER
* Crear controllers vacios para cada tabla en plural
	php artisan make:controller LenguajesDeProgramacionController
	php artisan make:controller FrameworksController
	php artisan make:controller FrameworksPorProyectosController
	php artisan make:controller ProyectosController
* Probar
php artisan migrate:fresh
php artisan migrate
php artisan db:seed