@extends('adminlte::page')
@section('plugins.Datatables')
    
@endsection

@section('template_title')
    Editar Competencia
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Update Competencia</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('competencias.update', $competencia->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('competencia.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
