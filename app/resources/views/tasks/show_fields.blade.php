<!-- Project Id Field -->
<div class="col-sm-12">
    {!! Form::label('project_id', __('models/tasks.fields.project_id').':') !!}
    <p>{{ $task->project_id }}</p>
</div>

<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', __('models/tasks.fields.name').':') !!}
    <p>{{ $task->name }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', __('models/tasks.fields.description').':') !!}
    <p>{{ $task->description }}</p>
</div>

