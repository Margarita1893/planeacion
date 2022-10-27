@extends('adminlte::page')
@section('plugins.Datatables')
    
@endsection

@section('template_title')
   Editar Resultado Aprendizaje
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Resultadoaprendizaje</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('resultadoaprendizajes.update', $resultadoaprendizaje->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('resultadoaprendizaje.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
