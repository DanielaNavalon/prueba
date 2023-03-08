<div class="box box-info padding-1">
    <div class="box-body">
        
       

        <div class="form-group">
            {{ Form::label('nombreempresa') }}
            {{ Form::select('idEmpresa', $empresas, $empleado->idEmpresa, ['class' => 'form-control' . ($errors->has('idEmpresa') ? ' is-invalid' : ''), 'placeholder' => 'NombreEmpresa']) }}
            {!! $errors->first('idEmpresa', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        <div class="form-group">
            {{ Form::label('NombreEmpleado') }}
            {{ Form::text('NombreEmpleado', $empleado->NombreEmpleado, ['class' => 'form-control' . ($errors->has('NombreEmpleado') ? ' is-invalid' : ''), 'placeholder' => 'Nombreempleado']) }}
            {!! $errors->first('NombreEmpleado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DNI') }}
            {{ Form::text('DNI', $empleado->DNI, ['class' => 'form-control' . ($errors->has('DNI') ? ' is-invalid' : ''), 'placeholder' => 'Dni']) }}
            {!! $errors->first('DNI', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Email') }}
            {{ Form::text('Email', $empleado->Email, ['class' => 'form-control' . ($errors->has('Email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
            {!! $errors->first('Email', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono') }}
            {{ Form::text('Telefono', $empleado->Telefono, ['class' => 'form-control' . ($errors->has('Telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('Telefono', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Localidad') }}
            {{ Form::text('Localidad', $empleado->Localidad, ['class' => 'form-control' . ($errors->has('Localidad') ? ' is-invalid' : ''), 'placeholder' => 'Localidad']) }}
            {!! $errors->first('Localidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion') }}
            {{ Form::text('Direccion', $empleado->Direccion, ['class' => 'form-control' . ($errors->has('Direccion') ? ' is-invalid' : ''), 'placeholder' => 'Direccion']) }}
            {!! $errors->first('Direccion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>