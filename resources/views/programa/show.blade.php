@extends('adminlte::page')
@section('plugins.Datatables')
    
@endsection

@section('template_title')
    {{ $programa->name ?? 'Show Programa' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Programa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('programas.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $programa->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $programa->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Tipoprograma Id:</strong>
                            {{ $programa->tipoprograma_id }}
                        </div>
                        <div class="form-group">
                            <strong>Modalidadejecucion Id:</strong>
                            {{ $programa->modalidadejecucion_id }}
                        </div>
                        <div class="form-group">
                            <strong>Version:</strong>
                            {{ $programa->version }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $programa->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
