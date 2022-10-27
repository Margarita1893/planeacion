@extends('adminlte::page')
@section('plugins.Datatables')
    
@endsection

@section('template_title')
    Editar Modalidad Ejecucion
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Modalidad Ejecucion</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('modalidadejecucions.update', $modalidadejecucion->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('modalidadejecucion.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
