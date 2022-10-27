@extends('adminlte::page')
@section('plugins.Datatables')
    
@endsection

@section('template_title')
    {{ $actividadproyecto->name ?? 'Show Actividadproyecto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Actividadproyecto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('actividadproyectos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $actividadproyecto->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $actividadproyecto->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Faseproyecto Id:</strong>
                            {{ $actividadproyecto->faseproyecto_id }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $actividadproyecto->descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $actividadproyecto->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
