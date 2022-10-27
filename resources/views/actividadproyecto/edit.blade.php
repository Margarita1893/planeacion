@extends('adminlte::page')
@section('plugins.Datatables')
    
@endsection

@section('template_title')
    Editar Actividad proyecto
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Actividad Proyecto</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('actividadproyectos.update', $actividadproyecto->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('actividadproyecto.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
