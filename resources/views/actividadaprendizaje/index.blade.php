@extends('adminlte::page')
@section('plugins.Datatables')
    
@endsection

@section('template_title')
    Actividad Aprendizaje
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Actividad aprendizaje') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('actividadaprendizajes.create') }}" class="btn btn-success btn-sm float-right"  data-placement="left">
                                  {{ __('Nuevo +') }}
                                </a>
                                <a class="btn btn-primary btn-sm float-right" href="{{ url('/home') }}"> Inicio</a>
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
                                        

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($actividadaprendizajes as $actividadaprendizaje)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            

                                            <td>
                                                <form action="{{ route('actividadaprendizajes.destroy',$actividadaprendizaje->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('actividadaprendizajes.show',$actividadaprendizaje->id) }}"><i class="fa fa-fw fa-eye"></i>Ver</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('actividadaprendizajes.edit',$actividadaprendizaje->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
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
                                    $('#programa').DataTable({
                                        "lengthMenu":[[5,10,50, -1], [5,10,50,"All"]]
                                    });
                                });
                           </script>
                        </div>
                    </div>
                </div>
                {!! $actividadaprendizajes->links() !!}
            </div>
        </div>
    </div>
@endsection
