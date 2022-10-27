@extends('adminlte::page')
@section('plugins.Datatables')
    
@endsection

@section('template_title')
    Programa
@endsection

@section('css')
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Programa') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('programas.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
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
                            <table id="programa" class="table table-striped  shadow-lg">
                                <thead class="thead table-info">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Codigo</th>
										<th>Nombre</th>
										<th>Tipo programa</th>
										<th>Modalidad ejecucion</th>
										<th>Version</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($programas as $programa)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $programa->codigo }}</td>
											<td>{{ $programa->nombre }}</td>
											<td>{{ $programa->tipoprograma->nombre }}</td>
											<td>{{ $programa->modalidadejecucion->nombre }}</td>
											<td>{{ $programa->version }}</td>
											<td>{{ $programa->estado }}</td>

                                            <td>
                                                <form action="{{ route('programas.destroy',$programa->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('programas.show',$programa->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('programas.edit',$programa->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @section('js')
                            <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                            <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
                            <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
                           <script>
                            $(document).ready(function () {
                                    $('#programa').DataTable({
                                        "lengthMenu":[[5,10,50, -1], [5,10,50,"All"]]
                                    });
                                });
                           </script>

                 @endsection
                            



                        </div>
                    </div>
                </div>
                {!! $programas->links() !!}
         
            </div>
        </div>
    </div>
  
@endsection
