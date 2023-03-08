@extends('layouts.app')

@section('template_title')
    {{ $empresa->name ?? 'Show Empresa' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Empresa</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('empresas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombreempresa:</strong>
                            {{ $empresa->NombreEmpresa }}
                        </div>
                        <div class="form-group">
                            <strong>Cif:</strong>
                            {{ $empresa->CIF }}
                        </div>
                        <div class="form-group">
                            <strong>Localidad:</strong>
                            {{ $empresa->Localidad }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $empresa->Direccion }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $empresa->Email }}
                        </div>
                        <div class="form-group">
                            <strong>Direccionweb:</strong>
                            {{ $empresa->DireccionWeb }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $empresa->Telefono }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
