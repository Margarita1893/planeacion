<?php

namespace App\Http\Controllers;

use App\Models\Modalidadejecucion;
use Illuminate\Http\Request;

/**
 * Class ModalidadejecucionController
 * @package App\Http\Controllers
 */
class ModalidadejecucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modalidadejecucions = Modalidadejecucion::paginate();

        return view('modalidadejecucion.index', compact('modalidadejecucions'))
            ->with('i', (request()->input('page', 1) - 1) * $modalidadejecucions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $modalidadejecucion = new Modalidadejecucion();
        return view('modalidadejecucion.create', compact('modalidadejecucion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Modalidadejecucion::$rules);

        $modalidadejecucion = Modalidadejecucion::create($request->all());

        return redirect()->route('modalidadejecucions.index')
            ->with('success', 'Modalidadejecucion created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $modalidadejecucion = Modalidadejecucion::find($id);

        return view('modalidadejecucion.show', compact('modalidadejecucion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modalidadejecucion = Modalidadejecucion::find($id);

        return view('modalidadejecucion.edit', compact('modalidadejecucion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Modalidadejecucion $modalidadejecucion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modalidadejecucion $modalidadejecucion)
    {
        request()->validate(Modalidadejecucion::$rules);

        $modalidadejecucion->update($request->all());

        return redirect()->route('modalidadejecucions.index')
            ->with('success', 'Modalidadejecucion updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $modalidadejecucion = Modalidadejecucion::find($id)->delete();

        return redirect()->route('modalidadejecucions.index')
            ->with('success', 'Modalidadejecucion deleted successfully');
    }
}
