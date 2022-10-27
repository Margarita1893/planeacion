@extends('adminlte::page')
@section('plugins.Datatables')
    
@endsection

@section('template_title')
    {{ $encabezadoplaneacion->name ?? 'Show Encabezadoplaneacion' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Encabezado planeacion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('encabezadoplaneacions.index') }}">Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $encabezadoplaneacion->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $encabezadoplaneacion->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Programa Id:</strong>
                            {{ $encabezadoplaneacion->programa_id }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $encabezadoplaneacion->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $encabezadoplaneacion->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
