<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class LenguajeDeProgramacion extends Model
{
    protected $table = 'lenguajes_de_programacion';
    protected $fillable = ['nombre', 'version', 'activo'];

    public function frameworks()
    {
        return $this->hasMany(Framework::class, 'lenguaje_programacion_id');
    }

    // Para contar los proyectos relacionados con los frameworks de este lenguaje de programación
    public function proyectosCount()
    {
        return $this->frameworks()
                    ->join('frameworks_por_proyectos', 'frameworks.id', '=', 'frameworks_por_proyectos.framework_id')
                    ->join('proyectos', 'frameworks_por_proyectos.proyecto_id', '=', 'proyectos.id')
                    ->selectRaw('count(distinct proyectos.id) as proyectos_count')
                    ->groupBy('frameworks.lenguaje_programacion_id');
    }
};