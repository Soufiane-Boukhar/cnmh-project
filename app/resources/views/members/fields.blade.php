<!-- First Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('first_name', __('models/members.fields.first_name').':') !!}
    {!! Form::text('first_name', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Last Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('last_name', __('models/members.fields.last_name').':') !!}
    {!! Form::text('last_name', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>