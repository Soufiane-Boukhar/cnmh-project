<!-- Consultation Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('consultation_id', __('models/rendezVouses.fields.consultation_id').':') !!}
    {!! Form::number('consultation_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Date Rendez Vous Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_rendez_vous', __('models/rendezVouses.fields.date_rendez_vous').':') !!}
    {!! Form::text('date_rendez_vous', null, ['class' => 'form-control','id'=>'date_rendez_vous']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_rendez_vous').datepicker()
    </script>
@endpush

<!-- Etat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('etat', __('models/rendezVouses.fields.etat').':') !!}
    {!! Form::text('etat', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Remarques Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('remarques', __('models/rendezVouses.fields.remarques').':') !!}
    {!! Form::textarea('remarques', null, ['class' => 'form-control', 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>