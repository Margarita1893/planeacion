<?php

namespace App\Http\Controllers;
use App\Models\Programa;
use App\Models\Competencia;
use Illuminate\Http\Request;

/**
 * Class CompetenciaController
 * @package App\Http\Controllers
 */
class CompetenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $competencias = Competencia::paginate();

        return view('competencia.index', compact('competencias'))
            ->with('i', (request()->input('page', 1) - 1) * $competencias->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $competencia = new Competencia();
        $programa =Programa::pluck('nombre','id');
        return view('competencia.create', compact('competencia','programa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Competencia::$rules);

        $competencia = Competencia::create($request->all());

        return redirect()->route('competencias.index')
            ->with('success', 'Competencia created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $competencia = Competencia::find($id);

        return view('competencia.show', compact('competencia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $competencia = Competencia::find($id);
        $programa =Programa::pluck('nombre','id');
        return view('competencia.edit', compact('competencia','programa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Competencia $competencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Competencia $competencia)
    {
        request()->validate(Competencia::$rules);

        $competencia->update($request->all());

        return redirect()->route('competencias.index')
            ->with('success', 'Competencia updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $competencia = Competencia::find($id)->delete();

        return redirect()->route('competencias.index')
            ->with('success', 'Competencia deleted successfully');
    }
}
