<!-- Date Enregistrement Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_enregistrement', __('models/consultations.fields.date_enregistrement').':') !!}
    {!! Form::text('date_enregistrement', null, ['class' => 'form-control','id'=>'date_enregistrement']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_enregistrement').datepicker()
    </script>
@endpush

<!-- Date Consultation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_consultation', __('models/consultations.fields.date_consultation').':') !!}
    {!! Form::text('date_consultation', null, ['class' => 'form-control','id'=>'date_consultation']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_consultation').datepicker()
    </script>
@endpush

<!-- Observation Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('observation', __('models/consultations.fields.observation').':') !!}
    {!! Form::textarea('observation', null, ['class' => 'form-control', 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>

<!-- Diagnostic Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('diagnostic', __('models/consultations.fields.diagnostic').':') !!}
    {!! Form::textarea('diagnostic', null, ['class' => 'form-control', 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>

<!-- Bilan Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('bilan', __('models/consultations.fields.bilan').':') !!}
    {!! Form::textarea('bilan', null, ['class' => 'form-control', 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>