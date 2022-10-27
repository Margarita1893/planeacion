@extends('adminlte::page')
@section('plugins.Datatables')
    
@endsection

@section('template_title')
    {{ $competencia->name ?? 'Show Competencia' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Competencia</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('competencias.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $competencia->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $competencia->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Programa Id:</strong>
                            {{ $competencia->programa_id }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $competencia->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
