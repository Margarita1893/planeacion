@extends('adminlte::page')
@section('plugins.Datatables')
    
@endsection

@section('template_title')
    {{ $modalidadejecucion->name ?? 'Show Modalidadejecucion' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Modalidad Ejecucion</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('modalidadejecucions.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $modalidadejecucion->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $modalidadejecucion->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $modalidadejecucion->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
