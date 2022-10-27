<?php

namespace App\Http\Controllers;

use App\Models\Actividadaprendizaje;
use Illuminate\Http\Request;

/**
 * Class ActividadaprendizajeController
 * @package App\Http\Controllers
 */
class ActividadaprendizajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $actividadaprendizajes = Actividadaprendizaje::paginate();

        return view('actividadaprendizaje.index', compact('actividadaprendizajes'))
            ->with('i', (request()->input('page', 1) - 1) * $actividadaprendizajes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $actividadaprendizaje = new Actividadaprendizaje();
        return view('actividadaprendizaje.create', compact('actividadaprendizaje'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Actividadaprendizaje::$rules);

        $actividadaprendizaje = Actividadaprendizaje::create($request->all());

        return redirect()->route('actividadaprendizajes.index')
            ->with('success', 'Actividadaprendizaje created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $actividadaprendizaje = Actividadaprendizaje::find($id);

        return view('actividadaprendizaje.show', compact('actividadaprendizaje'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $actividadaprendizaje = Actividadaprendizaje::find($id);

        return view('actividadaprendizaje.edit', compact('actividadaprendizaje'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Actividadaprendizaje $actividadaprendizaje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actividadaprendizaje $actividadaprendizaje)
    {
        request()->validate(Actividadaprendizaje::$rules);

        $actividadaprendizaje->update($request->all());

        return redirect()->route('actividadaprendizajes.index')
            ->with('success', 'Actividadaprendizaje updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $actividadaprendizaje = Actividadaprendizaje::find($id)->delete();

        return redirect()->route('actividadaprendizajes.index')
            ->with('success', 'Actividadaprendizaje deleted successfully');
    }
}
