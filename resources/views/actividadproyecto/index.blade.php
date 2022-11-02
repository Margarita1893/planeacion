@extends('adminlte::page')
@section('plugins.Datatables')
    
@endsection

@section('template_title')
    Actividad proyecto
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Actividad proyecto') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('actividadproyectos.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
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
                            <table id="actividadpro" class="table table-striped table-hover">
                                <thead class="thead table-info">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Codigo</th>
										<th>Nombre</th>
										<th>Fase proyecto</th>
										<th>Descripcion</th>
										<th>Estado</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($actividadproyectos as $actividadproyecto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $actividadproyecto->codigo }}</td>
											<td>{{ $actividadproyecto->nombre }}</td>
											<td>{{ $actividadproyecto->faseproyecto_id }}</td>
											<td>{{ $actividadproyecto->descripcion }}</td>
											<td>{{ $actividadproyecto->estado }}</td>

                                            <td>
                                                <form action="{{ route('actividadproyectos.destroy',$actividadproyecto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('actividadproyectos.show',$actividadproyecto->id) }}"><i class="fa fa-fw fa-eye"></i>Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('actividadproyectos.edit',$actividadproyecto->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i>Eliminar</button>
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
                                    $('#actividadpro').DataTable({
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
                {!! $actividadproyectos->links() !!}
            </div>
        </div>
    </div>
@endsection
