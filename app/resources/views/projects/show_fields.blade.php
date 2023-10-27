<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', __('models/projects.fields.name').':') !!}
    <p>{{ $project->name }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', __('models/projects.fields.description').':') !!}
    <p>{{ $project->description }}</p>
</div>

