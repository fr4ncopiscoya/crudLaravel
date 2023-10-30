
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Nombre') }}</label>
    <div>
        {{ Form::text('stu_name', $student->stu_name, ['class' => 'form-control' .
        ($errors->has('stu_name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre...']) }}
        {!! $errors->first('stu_name', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Ingrese su nombre.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Apellido') }}</label>
    <div>
        {{ Form::text('stu_lstname', $student->stu_lstname, ['class' => 'form-control' .
        ($errors->has('stu_lstname') ? ' is-invalid' : ''), 'placeholder' => 'Apellido...']) }}
        {!! $errors->first('stu_lstname', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Ingrese su apellido.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('DNI') }}</label>
    <div>
        {{ Form::text('stu_dni', $student->stu_dni, ['class' => 'form-control' .
        ($errors->has('stu_dni') ? ' is-invalid' : ''), 'placeholder' => 'DNI...']) }}
        {!! $errors->first('stu_dni', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Ingrese su número de DNI.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Telefono') }}</label>
    <div>
        {{ Form::text('stu_phone', $student->stu_phone, ['class' => 'form-control' .
        ($errors->has('stu_phone') ? ' is-invalid' : ''), 'placeholder' => 'Telefono...']) }}
        {!! $errors->first('stu_phone', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Ingrese su número de teléfono.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Correo') }}</label>
    <div>
        {{ Form::text('stu_email', $student->stu_email, ['class' => 'form-control' .
        ($errors->has('stu_email') ? ' is-invalid' : ''), 'placeholder' => 'Correo...']) }}
        {!! $errors->first('stu_email', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">Ingrese su correo.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="{{'./'}}" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Crear</button>
            </div>
        </div>
    </div>
