@extends('adminlte::page')
@section('plugins.Datatables')
    
@endsection

@section('template_title')
    Crear Actividadaprendizaje
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Actividad Aprendizaje</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('actividadaprendizajes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('actividadaprendizaje.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
