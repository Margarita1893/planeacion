@extends('adminlte::page')
@section('plugins.Datatables')
    
@endsection

@section('template_title')
    Crear Tipo programa
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Crear Tipo programa</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tipoprogramas.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('tipoprograma.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
