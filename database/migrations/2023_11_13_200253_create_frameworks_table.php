<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('frameworks', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 60)->unique();
            $table->string('version', 60);
            $table->string('pagina_web_url', 250)->nullable();
            $table->string('logo_url', 250)->nullable();
            $table->unsignedBigInteger('lenguaje_programacion_id');
            $table->foreign('lenguaje_programacion_id')->references('id')->on('lenguajes_de_programacion');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('frameworks');
    }
};