<?php

use App\Http\Controllers\TipoprogramaController;
use App\Http\Controllers\ModalidadejecucionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramaController;
use App\Http\Controllers\EncabezadoplaneacionController;
use App\Http\Controllers\CompetenciaController;
use App\Http\Controllers\ResultadoaprendizajeController;
use App\Http\Controllers\FaseproyectoController;
use App\Http\Controllers\ActividadaprendizajeController;
use App\Http\Controllers\ActividadproyectoController;
use App\Http\Controllers\ProyectoController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('tipoprogramas', TipoprogramaController::class)->middleware('auth');
Route::resource('modalidadejecucions', ModalidadejecucionController::class)->middleware('auth');
Route::resource('programas', ProgramaController::class)->middleware('auth');
Route::resource('encabezadoplaneacions', EncabezadoplaneacionController::class)->middleware('auth');
Route::resource('competencias', CompetenciaController::class)->middleware('auth');
Route::resource('proyectos', ProyectoController::class)->middleware('auth');
Route::resource('resultadoaprendizajes', ResultadoaprendizajeController::class)->middleware('auth');
Route::resource('faseproyectos', FaseproyectoController::class)->middleware('auth');
Route::resource('actividadproyectos', ActividadproyectoController::class)->middleware('auth');
Route::resource('actividadaprendizajes', ActividadaprendizajeController::class)->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
