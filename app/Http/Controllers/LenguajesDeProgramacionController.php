<?php
namespace App\Http\Controllers;
use App\Models\LenguajeDeProgramacion;
use Illuminate\Http\Request;

class LenguajesDeProgramacionController extends Controller
{
    public function index(Request $request)
    {
        $query = LenguajeDeProgramacion::withCount('frameworks');

        if ($request->has('search')) {
            $query->where('nombre', 'ILIKE', '%' . $request->search . '%');
        }

        if ($request->has('activo')) {
            $activo = filter_var($request->activo, FILTER_VALIDATE_BOOLEAN);
            $query->where('activo', $activo);
        }

        $lenguajes = LenguajeDeProgramacion::withCount('frameworks')->get();

        foreach ($lenguajes as $lenguaje) {
            // Hay que ver si el tema de la consulta de proyectosCount() se ejecuta correctamente
            $proyectosCount = $lenguaje->proyectosCount()->get();
            $lenguaje->proyectos_count = $proyectosCount->first()->proyectos_count ?? 0;
        }

        return view('lenguajes.index', compact('lenguajes'));
    }

    public function showWelcome()
    {
        $lenguajesCount = LenguajeDeProgramacion::count();
        return view('welcome', compact('lenguajesCount'));
    }
};