@extends('adminlte::page')
@section('plugins.Datatables')
    
@endsection

@section('template_title')
    Crear Actividadproyecto
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Actividad Proyecto</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('actividadproyectos.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('actividadproyecto.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
