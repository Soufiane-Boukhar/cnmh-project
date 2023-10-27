<!-- Patient Id Field -->
<div class="col-sm-12">
    {!! Form::label('patient_id', __('models/reclamations.fields.patient_id').':') !!}
    <p>{{ $reclamation->patient_id }}</p>
</div>

<!-- Objet Field -->
<div class="col-sm-12">
    {!! Form::label('objet', __('models/reclamations.fields.objet').':') !!}
    <p>{{ $reclamation->objet }}</p>
</div>

<!-- Reclamation Field -->
<div class="col-sm-12">
    {!! Form::label('reclamation', __('models/reclamations.fields.reclamation').':') !!}
    <p>{{ $reclamation->reclamation }}</p>
</div>

<!-- Date Reclamation Field -->
<div class="col-sm-12">
    {!! Form::label('date_reclamation', __('models/reclamations.fields.date_reclamation').':') !!}
    <p>{{ $reclamation->date_reclamation }}</p>
</div>

