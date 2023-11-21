<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Framework extends Model
{
    protected $table = 'frameworks';
    protected $fillable = ['nombre', 'version', 'pagina_web_url', 'logo_url', 'lenguaje_programacion_id'];

    public function lenguajeProgramacion()
    {
        return $this->belongsTo(LenguajeDeProgramacion::class, 'lenguaje_programacion_id');
    }

    public function proyectos()
    {
        return $this->belongsToMany(Proyecto::class, 'frameworks_por_proyectos', 'framework_id', 'proyecto_id')
                    ->withPivot('descripcion')
                    ->withTimestamps();
    }
};