@extends('adminlte::page')
@section('plugins.Datatables')
    
@endsection


@section('template_title')
    {{ $resultadoaprendizaje->name ?? 'Show Resultadoaprendizaje' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Resultado Aprendizaje</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('resultadoaprendizajes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $resultadoaprendizaje->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $resultadoaprendizaje->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Competencia Id:</strong>
                            {{ $resultadoaprendizaje->competencia_id }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $resultadoaprendizaje->estado }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
