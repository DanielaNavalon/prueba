<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('NombreTarea') }}
            {{ Form::text('NombreTarea', $tarea->NombreTarea, ['class' => 'form-control' . ($errors->has('NombreTarea') ? ' is-invalid' : ''), 'placeholder' => 'Nombretarea']) }}
            {!! $errors->first('NombreTarea', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('Descripcion', $tarea->Descripcion, ['class' => 'form-control' . ($errors->has('Descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('Descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FechaInicio') }}
            {{ Form::text('FechaInicio', $tarea->FechaInicio, ['class' => 'form-control' . ($errors->has('FechaInicio') ? ' is-invalid' : ''), 'placeholder' => 'Fechainicio']) }}
            {!! $errors->first('FechaInicio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FechaFind') }}
            {{ Form::text('FechaFind', $tarea->FechaFind, ['class' => 'form-control' . ($errors->has('FechaFind') ? ' is-invalid' : ''), 'placeholder' => 'Fechafind']) }}
            {!! $errors->first('FechaFind', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>