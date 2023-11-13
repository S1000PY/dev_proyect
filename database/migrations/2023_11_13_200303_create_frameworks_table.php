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
            $table->string('nombre', 100)->unique();
            $table->string('version', 50);
            $table->unsignedBigInteger('lenguaje_programacion_id');
            $table->foreign('lenguaje_programacion_id')->references('id')->on('lenguajes_de_programacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('frameworks');
    }
};