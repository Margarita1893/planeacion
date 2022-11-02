@extends('adminlte::page')
@section('plugins.Datatables')
    
@endsection

@section('template_title')
    Fase proyecto
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Fase proyecto') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('faseproyectos.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
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
                            <table id="fase" class="table table-striped table-hover">
                                <thead class="thead table-info">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Codigo</th>
										<th>Nombre</th>
										<th>Proyecto</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($faseproyectos as $faseproyecto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $faseproyecto->codigo }}</td>
											<td>{{ $faseproyecto->nombre }}</td>
											<td>{{ $faseproyecto->proyecto->nombre }}</td>
											<td>{{ $faseproyecto->estado }}</td>

                                            <td>
                                                <form action="{{ route('faseproyectos.destroy',$faseproyecto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('faseproyectos.show',$faseproyecto->id) }}"><i class="fa fa-fw fa-eye"></i>Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('faseproyectos.edit',$faseproyecto->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                                    $('#fase').DataTable({
                                        "lengthMenu":[[5,10,50, -1], [5,10,50,"All"]],
                                        "language": {
                                        "lengthMenu": "Ver _MENU_ Por pagina",
                                        "zeroRecords": "Lo sentimos, No se encontró informacion",
                                        "info": "Pagina _PAGE_ de _PAGES_",
                                        "infoEmpty": "No se encontraron registros",
                                        "infoFiltered": "(filtro de _MAX_ Registros totales)",
                                        "search":"Buscar",
                                        "paginate":{
                                            "next":"Siguiente",
                                            "previous":"Anterior"

                                        }
                                    }
                                    });
                                });
                           </script>

                 @endsection
                        </div>
                    </div>
                </div>
                {!! $faseproyectos->links() !!}
            </div>
        </div>
    </div>
@endsection
