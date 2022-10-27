@extends('adminlte::page')
@section('plugins.Datatables')
    
@endsection

@section('template_title')
    Crear Resultado Aprendizaje
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Resultado Aprendizaje</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('resultadoaprendizajes.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('resultadoaprendizaje.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
