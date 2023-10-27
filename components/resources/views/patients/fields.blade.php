<!-- Tuteur Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tuteur_id', __('models/patients.fields.tuteur_id').':') !!}
    {!! Form::number('tuteur_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Niveau Scolaire Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('niveau_scolaire_id', __('models/patients.fields.niveau_scolaire_id').':') !!}
    {!! Form::number('niveau_scolaire_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Nom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nom', __('models/patients.fields.nom').':') !!}
    {!! Form::text('nom', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Prenom Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prenom', __('models/patients.fields.prenom').':') !!}
    {!! Form::text('prenom', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Telephone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telephone', __('models/patients.fields.telephone').':') !!}
    {!! Form::text('telephone', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Cin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cin', __('models/patients.fields.cin').':') !!}
    {!! Form::text('cin', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', __('models/patients.fields.email').':') !!}
    {!! Form::email('email', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', __('models/patients.fields.image').':') !!}
    {!! Form::text('image', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Adresse Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adresse', __('models/patients.fields.adresse').':') !!}
    {!! Form::text('adresse', null, ['class' => 'form-control', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Remarques Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('remarques', __('models/patients.fields.remarques').':') !!}
    {!! Form::textarea('remarques', null, ['class' => 'form-control', 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>