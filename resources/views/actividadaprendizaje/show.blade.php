@extends('adminlte::page')
@section('plugins.Datatables')
    
@endsection

@section('template_title')
    {{ $actividadaprendizaje->name ?? 'Show Actividadaprendizaje' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Actividad Aprendizaje</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('actividadaprendizajes.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
