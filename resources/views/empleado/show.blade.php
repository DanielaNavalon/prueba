@extends('layouts.app')

@section('template_title')
    {{ $empleado->name ?? 'Show Empleado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Empleado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empleados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idempresa:</strong>
                            {{ $empleado->idEmpresa }}
                        </div>
                        <div class="form-group">
                            <strong>Nombreempleado:</strong>
                            {{ $empleado->NombreEmpleado }}
                        </div>
                        <div class="form-group">
                            <strong>Dni:</strong>
                            {{ $empleado->DNI }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $empleado->Email }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $empleado->Telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Localidad:</strong>
                            {{ $empleado->Localidad }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $empleado->Direccion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
