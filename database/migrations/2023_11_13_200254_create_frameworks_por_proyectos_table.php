<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('frameworks_por_proyectos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('framework_id');
            $table->unsignedBigInteger('proyecto_id');
            $table->foreign('framework_id')->references('id')->on('frameworks');
            $table->foreign('proyecto_id')->references('id')->on('proyectos');
            $table->text('descripcion')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('frameworks_por_proyectos');
    }
};