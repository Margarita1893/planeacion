<?php

namespace App\Http\Controllers;
use App\Models\Proyecto;
use App\Models\Faseproyecto;
use Illuminate\Http\Request;

/**
 * Class FaseproyectoController
 * @package App\Http\Controllers
 */
class FaseproyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faseproyectos = Faseproyecto::paginate();

        return view('faseproyecto.index', compact('faseproyectos'))
            ->with('i', (request()->input('page', 1) - 1) * $faseproyectos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faseproyecto = new Faseproyecto();
        $proyecto= Proyecto::pluck('nombre','id');
        return view('faseproyecto.create', compact('faseproyecto','proyecto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Faseproyecto::$rules);

        $faseproyecto = Faseproyecto::create($request->all());

        return redirect()->route('faseproyectos.index')
            ->with('success', 'Faseproyecto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $faseproyecto = Faseproyecto::find($id);

        return view('faseproyecto.show', compact('faseproyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $faseproyecto = Faseproyecto::find($id);
        $proyecto= Proyecto::pluck('nombre','id');
        return view('faseproyecto.edit', compact('faseproyecto','proyecto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Faseproyecto $faseproyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faseproyecto $faseproyecto)
    {
        request()->validate(Faseproyecto::$rules);

        $faseproyecto->update($request->all());

        return redirect()->route('faseproyectos.index')
            ->with('success', 'Faseproyecto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $faseproyecto = Faseproyecto::find($id)->delete();

        return redirect()->route('faseproyectos.index')
            ->with('success', 'Faseproyecto deleted successfully');
    }
}
