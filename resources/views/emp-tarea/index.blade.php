@extends('layouts.app')

@section('template_title')
    Emp Tarea
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Emp Tarea') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('emp-tareas.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
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
                                        
										<th>Idempleado</th>
										<th>Idtarea</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($empTareas as $empTarea)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $empTarea->idEmpleado }}</td>
											<td>{{ $empTarea->idTarea }}</td>

                                            <td>
                                                <form action="{{ route('emp-tareas.destroy',$empTarea->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('emp-tareas.show',$empTarea->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('emp-tareas.edit',$empTarea->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $empTareas->links() !!}
            </div>
        </div>
    </div>
@endsection
