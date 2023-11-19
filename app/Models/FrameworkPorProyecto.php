<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Relations\Pivot;

class FrameworkPorProyecto extends Pivot
{
    protected $table = 'frameworks_por_proyectos';
    protected $fillable = ['framework_id', 'proyecto_id', 'descripcion'];

    // Asegúrate de definir las relaciones inversas si es necesario
    public function framework()
    {
        return $this->belongsTo(Framework::class, 'framework_id');
    }

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class, 'proyecto_id');
    }
}