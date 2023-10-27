<!-- Nom Field -->
<div class="form-group col-sm-12">
    {!! Form::label('nom', __('models/couvertureMedicals.fields.nom').':') !!}
    {!! Form::text('nom', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Description Field -->
<div class="form-group col-md-12">
    {!! Form::label('description', __('models/couvertureMedicals.fields.description').':') !!}
    {!! Form::textarea('description',old('description'), null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

