@extends('adminlte::page')
@section('plugins.Datatables')
    
@endsection

@section('template_title')
    Editar Tipoprograma
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar Tipo programa</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tipoprogramas.update', $tipoprograma->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tipoprograma.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
