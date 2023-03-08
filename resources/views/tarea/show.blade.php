@extends('layouts.app')

@section('template_title')
    {{ $tarea->name ?? 'Show Tarea' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Tarea</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('tareas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombretarea:</strong>
                            {{ $tarea->NombreTarea }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $tarea->Descripcion }}
                        </div>
                        <div class="form-group">
                            <strong>Fechainicio:</strong>
                            {{ $tarea->FechaInicio }}
                        </div>
                        <div class="form-group">
                            <strong>Fechafind:</strong>
                            {{ $tarea->FechaFind }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
