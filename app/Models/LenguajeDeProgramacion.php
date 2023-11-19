<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class LenguajeDeProgramacion extends Model
{
    protected $table = 'lenguajes_de_programacion';
    protected $fillable = ['nombre', 'version', 'activo'];

    public function frameworks()
    {
        return $this->hasMany(Framework::class, 'lenguaje_id');
    }
};