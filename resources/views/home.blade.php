@extends('adminlte::page')

@section('title','Home')
@yield('css')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if (Auth::check())
        <h1 class="text-center mt-4 mb-4">Gestion de Planeación</h1>
    
  <div> 
    
  <ul class="list-group">
    <a class="list-group-item active" aria-current="true" href="{{ route('tipoprogramas.index') }}">{{ __('Tipo programa') }}</a>
    <a class="list-group-item" href="{{ route('modalidadejecucions.index') }}">{{ __('Modalidad') }}</a>
    <a class="list-group-item" href="{{ route('programas.index') }}">{{ __('programa') }}</a>
    <a class="list-group-item" href="{{ route('encabezadoplaneacions.index') }}">{{ __('Encabezado') }}</a>
    <a class="list-group-item" href="{{ route('competencias.index') }}">{{ __('competencia') }}</a>
    <a class="list-group-item" href="{{ route('proyectos.index') }}">{{ __('Proyecto') }}</a>
    <a class="list-group-item" href="{{ route('resultadoaprendizajes.index') }}">{{ __('Resultados Aprendizaje') }}</a>
    <a class="list-group-item" href="{{ route('faseproyectos.index') }}">{{ __('Fase Proyecto') }}</a>
    <a class="list-group-item" href="{{ route('actividadproyectos.index') }}">{{ __('Actividad de Proyecto') }}</a>
    <a class="list-group-item" href="{{ route('actividadaprendizajes.index') }}">{{ __('Actividad de Aprendizaje') }}</a>
  </ul>
  </div>
</div>
@endif
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
@yield('js')
@endsection
