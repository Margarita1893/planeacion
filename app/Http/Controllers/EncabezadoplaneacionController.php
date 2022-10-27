<?php

namespace App\Http\Controllers;

use App\Models\Encabezadoplaneacion;
use App\Models\Programa;
use Illuminate\Http\Request;

/**
 * Class EncabezadoplaneacionController
 * @package App\Http\Controllers
 */
class EncabezadoplaneacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $encabezadoplaneacions = Encabezadoplaneacion::paginate();

        return view('encabezadoplaneacion.index', compact('encabezadoplaneacions'))
            ->with('i', (request()->input('page', 1) - 1) * $encabezadoplaneacions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $encabezadoplaneacion = new Encabezadoplaneacion();
        $programa= Programa::pluck('nombre','id');
        return view('encabezadoplaneacion.create', compact('encabezadoplaneacion','programa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Encabezadoplaneacion::$rules);

        $encabezadoplaneacion = Encabezadoplaneacion::create($request->all());

        return redirect()->route('encabezadoplaneacions.index')
            ->with('success', 'Encabezadoplaneacion created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $encabezadoplaneacion = Encabezadoplaneacion::find($id);

        return view('encabezadoplaneacion.show', compact('encabezadoplaneacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $encabezadoplaneacion = Encabezadoplaneacion::find($id);
        $programa= Programa::pluck('nombre','id');
        return view('encabezadoplaneacion.edit', compact('encabezadoplaneacion','programa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Encabezadoplaneacion $encabezadoplaneacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Encabezadoplaneacion $encabezadoplaneacion)
    {
        request()->validate(Encabezadoplaneacion::$rules);

        $encabezadoplaneacion->update($request->all());

        return redirect()->route('encabezadoplaneacions.index')
            ->with('success', 'Encabezadoplaneacion updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $encabezadoplaneacion = Encabezadoplaneacion::find($id)->delete();

        return redirect()->route('encabezadoplaneacions.index')
            ->with('success', 'Encabezadoplaneacion deleted successfully');
    }
}
