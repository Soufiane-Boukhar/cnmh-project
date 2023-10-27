<!-- First Name Field -->
<div class="col-sm-12">
    {!! Form::label('first_name', __('models/members.fields.first_name').':') !!}
    <p>{{ $member->first_name }}</p>
</div>

<!-- Last Name Field -->
<div class="col-sm-12">
    {!! Form::label('last_name', __('models/members.fields.last_name').':') !!}
    <p>{{ $member->last_name }}</p>
</div>

