<?php

namespace App\Http\Controllers;
use App\Models\Faseproyecto;
use App\Models\Actividadproyecto;
use Illuminate\Http\Request;

/**
 * Class ActividadproyectoController
 * @package App\Http\Controllers
 */
class ActividadproyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividadproyectos = Actividadproyecto::paginate();

        return view('actividadproyecto.index', compact('actividadproyectos'))
            ->with('i', (request()->input('page', 1) - 1) * $actividadproyectos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $actividadproyecto = new Actividadproyecto();
        $faseproyecto= Faseproyecto::pluck('nombre','id');
        return view('actividadproyecto.create', compact('actividadproyecto','faseproyecto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Actividadproyecto::$rules);

        $actividadproyecto = Actividadproyecto::create($request->all());

        return redirect()->route('actividadproyectos.index')
            ->with('success', 'Actividadproyecto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $actividadproyecto = Actividadproyecto::find($id);

        return view('actividadproyecto.show', compact('actividadproyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actividadproyecto = Actividadproyecto::find($id);
        $faseproyecto= Faseproyecto::pluck('nombre','id');
        return view('actividadproyecto.edit', compact('actividadproyecto','faseproyecto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Actividadproyecto $actividadproyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actividadproyecto $actividadproyecto)
    {
        request()->validate(Actividadproyecto::$rules);

        $actividadproyecto->update($request->all());

        return redirect()->route('actividadproyectos.index')
            ->with('success', 'Actividadproyecto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $actividadproyecto = Actividadproyecto::find($id)->delete();

        return redirect()->route('actividadproyectos.index')
            ->with('success', 'Actividadproyecto deleted successfully');
    }
}
