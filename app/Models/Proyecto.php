<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;
    protected $table = 'proyectos';

    protected $fillable = ['nombre', 'fecha_desde', 'fecha_hasta', 'activo', 'descripcion', 'encargado'];

    protected $casts = [
        'activo' => 'boolean',
        'fecha_desde' => 'date',
        'fecha_hasta' => 'date',
    ];

    //Relación muchos a muchos con la tabla Framework.
    public function frameworks()
    {
        return $this->belongsToMany(Framework::class, 'frameworks_por_proyectos', 'proyecto_id', 'framework_id')
                    ->withPivot('descripcion')
                    ->withTimestamps();
    }
};