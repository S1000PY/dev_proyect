<?php
namespace App\Http\Controllers;
use App\Models\Framework;
use Illuminate\Http\Request;

class FrameworksController extends Controller
{
    public function index(Request $request)
    {
        $query = Framework::with(['lenguajeProgramacion', 'proyectos']);

        if ($request->has('search')) {
            $query->where('nombre', 'ILIKE', '%' . $request->search . '%');
        }

        if ($request->has('lenguaje_id')) {
            $query->where('lenguaje_programacion_id', $request->lenguaje_id);
        }

        $frameworks = $query->get();

        return view('frameworks.index', compact('frameworks'));
    }
}
