@extends('adminlte::page')
@section('plugins.Datatables')
    
@endsection

@section('template_title')
    Editar Actividadaprendizaje
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Actividad aprendizaje</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('actividadaprendizajes.update', $actividadaprendizaje->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('actividadaprendizaje.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
