@extends('adminlte::page')
@section('plugins.Datatables')
    
@endsection

@section('template_title')
    {{ $tipoprograma->name ?? 'Show Tipoprograma' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Tipo programa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tipoprogramas.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $tipoprograma->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $tipoprograma->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $tipoprograma->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
