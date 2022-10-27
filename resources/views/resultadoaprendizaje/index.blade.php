@extends('adminlte::page')
@section('plugins.Datatables')
    
@endsection

@section('template_title')
    Resultado Aprendizaje
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Resultadoaprendizaje') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('resultadoaprendizajes.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
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
										<th>Competencia</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($resultadoaprendizajes as $resultadoaprendizaje)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $resultadoaprendizaje->codigo }}</td>
											<td>{{ $resultadoaprendizaje->nombre }}</td>
											<td>{{ $resultadoaprendizaje->competencia->nombre }}</td>
											<td>{{ $resultadoaprendizaje->estado }}</td>

                                            <td>
                                                <form action="{{ route('resultadoaprendizajes.destroy',$resultadoaprendizaje->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('resultadoaprendizajes.show',$resultadoaprendizaje->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('resultadoaprendizajes.edit',$resultadoaprendizaje->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                {!! $resultadoaprendizajes->links() !!}
            </div>
        </div>
    </div>
@endsection
