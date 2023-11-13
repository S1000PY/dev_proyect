<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Relations\Pivot;

class FrameworkPorProyecto extends Pivot
{
    protected $table = 'frameworks_por_proyectos';
    protected $fillable = ['proyecto_id', 'framework_id', 'descripcion'];
};