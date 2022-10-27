<?php

namespace App\Http\Controllers;
use App\Models\Competencia;
use App\Models\Resultadoaprendizaje;
use Illuminate\Http\Request;

/**
 * Class ResultadoaprendizajeController
 * @package App\Http\Controllers
 */
class ResultadoaprendizajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultadoaprendizajes = Resultadoaprendizaje::paginate();

        return view('resultadoaprendizaje.index', compact('resultadoaprendizajes'))
            ->with('i', (request()->input('page', 1) - 1) * $resultadoaprendizajes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $resultadoaprendizaje = new Resultadoaprendizaje();
        $competencia= Competencia::pluck('nombre','id');
        return view('resultadoaprendizaje.create', compact('resultadoaprendizaje','competencia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Resultadoaprendizaje::$rules);

        $resultadoaprendizaje = Resultadoaprendizaje::create($request->all());

        return redirect()->route('resultadoaprendizajes.index')
            ->with('success', 'Resultadoaprendizaje created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $resultadoaprendizaje = Resultadoaprendizaje::find($id);

        return view('resultadoaprendizaje.show', compact('resultadoaprendizaje'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $resultadoaprendizaje = Resultadoaprendizaje::find($id);
        $competencia= Competencia::pluck('nombre','id');
        return view('resultadoaprendizaje.edit', compact('resultadoaprendizaje','competencia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Resultadoaprendizaje $resultadoaprendizaje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resultadoaprendizaje $resultadoaprendizaje)
    {
        request()->validate(Resultadoaprendizaje::$rules);

        $resultadoaprendizaje->update($request->all());

        return redirect()->route('resultadoaprendizajes.index')
            ->with('success', 'Resultadoaprendizaje updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $resultadoaprendizaje = Resultadoaprendizaje::find($id)->delete();

        return redirect()->route('resultadoaprendizajes.index')
            ->with('success', 'Resultadoaprendizaje deleted successfully');
    }
}
