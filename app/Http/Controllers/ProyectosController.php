<?php
namespace App\Http\Controllers;
use App\Models\Proyecto;
use App\Models\Framework;
use Illuminate\Http\Request;

class ProyectosController extends Controller
{
    public function show($id)
    {
        $proyecto = Proyecto::with(['frameworks', 'frameworks.lenguajeProgramacion'])
                            ->findOrFail($id);

        return view('proyectos.show', compact('proyecto'));
    }
}
