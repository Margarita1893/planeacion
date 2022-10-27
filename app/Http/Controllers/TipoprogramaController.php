<?php

namespace App\Http\Controllers;

use App\Models\Tipoprograma;
use Illuminate\Http\Request;

/**
 * Class TipoprogramaController
 * @package App\Http\Controllers
 */
class TipoprogramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoprogramas = Tipoprograma::paginate();

        return view('tipoprograma.index', compact('tipoprogramas'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoprogramas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoprograma = new Tipoprograma();
        return view('tipoprograma.create', compact('tipoprograma'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tipoprograma::$rules);

        $tipoprograma = Tipoprograma::create($request->all());

        return redirect()->route('tipoprogramas.index')
            ->with('success', 'Tipoprograma created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoprograma = Tipoprograma::find($id);

        return view('tipoprograma.show', compact('tipoprograma'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoprograma = Tipoprograma::find($id);

        return view('tipoprograma.edit', compact('tipoprograma'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tipoprograma $tipoprograma
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipoprograma $tipoprograma)
    {
        request()->validate(Tipoprograma::$rules);

        $tipoprograma->update($request->all());

        return redirect()->route('tipoprogramas.index')
            ->with('success', 'Tipoprograma updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoprograma = Tipoprograma::find($id)->delete();

        return redirect()->route('tipoprogramas.index')
            ->with('success', 'Tipoprograma deleted successfully');
    }
}
