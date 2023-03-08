<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idEmpleado') }}
            {{ Form::text('idEmpleado', $empTarea->idEmpleado, ['class' => 'form-control' . ($errors->has('idEmpleado') ? ' is-invalid' : ''), 'placeholder' => 'Idempleado']) }}
            {!! $errors->first('idEmpleado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idTarea') }}
            {{ Form::text('idTarea', $empTarea->idTarea, ['class' => 'form-control' . ($errors->has('idTarea') ? ' is-invalid' : ''), 'placeholder' => 'Idtarea']) }}
            {!! $errors->first('idTarea', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>