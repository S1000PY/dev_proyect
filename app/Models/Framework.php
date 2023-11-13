<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Framework extends Model
{
    protected $table = 'frameworks';
    protected $fillable = ['nombre', 'pagina_web_url', 'logo_url', 'lenguaje_id'];

    public function lenguajeProgramacion()
    {
        return $this->belongsTo(LenguajeDeProgramacion::class, 'lenguaje_id');
    }

    public function proyectos()
    {
        return $this->belongsToMany(Proyecto::class, 'frameworks_por_proyectos')
                    ->withPivot('descripcion')
                    ->withTimestamps();
    }
};