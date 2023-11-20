dev_proyect
------------------------------------1ra_Entrega------------------------------------
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

------------------------------------2da_Entrega------------------------------------
Implementar todo en el mismo proyecto en la rama "dev".
Implementar las siguientes páginas como interfaces Web usando Blade (no API),
usando Bootstrap, Bulma u otro framework CSS (el framework debe
descargarse y formar parte del proyecto, no desde Internet):

- Página de Inicio:
    * Agregar nombre del alumno
    * Agregar un nombre al proyecto en base al DER
    * Agregar imagen del DER (descargar y agregar al proyecto para mostrar la imagen localmente
    dentro del proyecto Laravel)
	
    * Agregar enlaces de ida-vuelta a las siguientes páginas:
- Página 1: Listado de Lenguajes de Programación con buscador
    * Listado (grilla) de todos los lenguajes del sistema.
    * "Badge" para indicar si está activo o no
    * Agregar dos columnas que muestren:
        - Número de "frameworks" en el sistema que utilicen este LP
        - Número de Proyectos que utilicen frameworks con este LP
    * Buscador por nombre (debe permitir búsqueda parcial sin tener en cuenta maýusculas) y
    activo. Además agregar un elemento para buscar lenguajes que NO tengan framework asociado.
	
- Página 2: Listado de Frameworks con buscador
    * Listado (grilla) de todos los frameworks del sistema.
    * Mostrar la imágen (URL) como imagen, no como texto.
    * El enlace debe permitir al hacer click abrirse en una nueva página.
    * Mostrar el texto del Lenguaje al que está asociado
    * Mostrar el número total de proyectos que utilizan este framework.
    * Mostrar en una columna todos los nombres de proyectos asociados (si tiene). Cada
    proyecto debe ser un enlace a página 3 (si tiene muchos proyectos, mostrarlos
    uno encima de otro en la misma fila, no en una fila separada).
    * Buscador por nombre (debe permitir búsqueda parcial sin tener en cuenta maýusculas) y
    activo. Además buscador por lenguaje de programación específico como lista.
    Todos los elementos de búsqueda deben poder utilizarse en forma individual o conjunta,
    y el resultado mostrarse en la misma grilla (no otra página).

- Página 3: Ver Proyecto
    * Mostrar la información del proyecto como cabecera, con toda su información
    de la tabla
    * Mostrar como badges todos los frameworks que utiliza
    junto con la "descripción" de la tabla "framework por proyecto".
    * Mostrar como badges todos los lenguajes de programación que utiliza sin repetición
    * Mostrar activo como badge de colores activo o no.
    * Aplicar un buen CSS para la presentación.

------------------------------------3ra_Entrega------------------------------------