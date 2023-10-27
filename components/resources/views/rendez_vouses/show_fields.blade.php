<!-- Consultation Id Field -->
<div class="col-sm-12">
    {!! Form::label('consultation_id', __('models/rendezVouses.fields.consultation_id').':') !!}
    <p>{{ $rendezVous->consultation_id }}</p>
</div>

<!-- Date Rendez Vous Field -->
<div class="col-sm-12">
    {!! Form::label('date_rendez_vous', __('models/rendezVouses.fields.date_rendez_vous').':') !!}
    <p>{{ $rendezVous->date_rendez_vous }}</p>
</div>

<!-- Etat Field -->
<div class="col-sm-12">
    {!! Form::label('etat', __('models/rendezVouses.fields.etat').':') !!}
    <p>{{ $rendezVous->etat }}</p>
</div>

<!-- Remarques Field -->
<div class="col-sm-12">
    {!! Form::label('remarques', __('models/rendezVouses.fields.remarques').':') !!}
    <p>{{ $rendezVous->remarques }}</p>
</div>

