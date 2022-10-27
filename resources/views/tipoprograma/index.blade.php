@extends('adminlte::page')
@section('plugins.Datatables')
    
@endsection

@section('template_title')
    Tipo programa
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Tipoprograma') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('tipoprogramas.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo +') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Codigo</th>
										<th>Nombre</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tipoprogramas as $tipoprograma)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $tipoprograma->codigo }}</td>
											<td>{{ $tipoprograma->nombre }}</td>
											<td>{{ $tipoprograma->estado }}</td>

                                            <td>
                                                <form action="{{ route('tipoprogramas.destroy',$tipoprograma->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('tipoprogramas.show',$tipoprograma->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('tipoprogramas.edit',$tipoprograma->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
                        </div>
                    </div>
                </div>
                {!! $tipoprogramas->links() !!}
            </div>
        </div>
    </div>
@endsection
