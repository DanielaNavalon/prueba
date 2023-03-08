@extends('layouts.app')

@section('template_title')
    {{ $empleadotarea->name ?? 'Show Empleadotarea' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Empleadotarea</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empleadotareas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idempleado:</strong>
                            {{ $empleadotarea->idEmpleado }}
                        </div>
                        <div class="form-group">
                            <strong>Idtarea:</strong>
                            {{ $empleadotarea->idTarea }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
