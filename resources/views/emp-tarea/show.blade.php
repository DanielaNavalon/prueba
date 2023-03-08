@extends('layouts.app')

@section('template_title')
    {{ $empTarea->name ?? 'Show Emp Tarea' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Emp Tarea</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('emp-tareas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idempleado:</strong>
                            {{ $empTarea->idEmpleado }}
                        </div>
                        <div class="form-group">
                            <strong>Idtarea:</strong>
                            {{ $empTarea->idTarea }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
