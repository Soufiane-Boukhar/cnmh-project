<!-- Patient Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patient_id', __('models/reclamations.fields.patient_id').':') !!}
    {!! Form::number('patient_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Objet Field -->
<div class="form-group col-sm-6">
    {!! Form::label('objet', __('models/reclamations.fields.objet').':') !!}
    {!! Form::text('objet', null, ['class' => 'form-control', 'required', 'maxlength' => 255, 'maxlength' => 255]) !!}
</div>

<!-- Reclamation Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('reclamation', __('models/reclamations.fields.reclamation').':') !!}
    {!! Form::textarea('reclamation', null, ['class' => 'form-control', 'required', 'maxlength' => 65535, 'maxlength' => 65535]) !!}
</div>

<!-- Date Reclamation Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_reclamation', __('models/reclamations.fields.date_reclamation').':') !!}
    {!! Form::text('date_reclamation', null, ['class' => 'form-control','id'=>'date_reclamation']) !!}
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#date_reclamation').datepicker()
    </script>
@endpush