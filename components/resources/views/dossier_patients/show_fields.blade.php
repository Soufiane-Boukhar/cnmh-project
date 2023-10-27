<!-- Patient Id Field -->
<div class="col-sm-12">
    {!! Form::label('patient_id', __('models/dossierPatients.fields.patient_id').':') !!}
    <p>{{ $dossierPatient->patient_id }}</p>
</div>

<!-- Couverture Medical Id Field -->
<div class="col-sm-12">
    {!! Form::label('couverture_medical_id', __('models/dossierPatients.fields.couverture_medical_id').':') !!}
    <p>{{ $dossierPatient->couverture_medical_id }}</p>
</div>

<!-- Numero Dossier Field -->
<div class="col-sm-12">
    {!! Form::label('numero_dossier', __('models/dossierPatients.fields.numero_dossier').':') !!}
    <p>{{ $dossierPatient->numero_dossier }}</p>
</div>

<!-- Etat Field -->
<div class="col-sm-12">
    {!! Form::label('etat', __('models/dossierPatients.fields.etat').':') !!}
    <p>{{ $dossierPatient->etat }}</p>
</div>

<!-- Date Enregsitrement Field -->
<div class="col-sm-12">
    {!! Form::label('date_enregsitrement', __('models/dossierPatients.fields.date_enregsitrement').':') !!}
    <p>{{ $dossierPatient->date_enregsitrement }}</p>
</div>

