<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('lenguajes_de_programacion', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100)->unique();
            $table->string('version', 50);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('lenguajes_de_programacion');
    }
};