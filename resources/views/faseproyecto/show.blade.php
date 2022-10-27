@extends('adminlte::page')
@section('plugins.Datatables')
    
@endsection

@section('template_title')
    {{ $faseproyecto->name ?? 'Show Faseproyecto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Fase proyecto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('faseproyectos.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $faseproyecto->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $faseproyecto->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Proyecto Id:</strong>
                            {{ $faseproyecto->proyecto_id }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $faseproyecto->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
