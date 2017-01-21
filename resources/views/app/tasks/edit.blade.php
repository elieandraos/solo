<div class="form-group row create-task-modal">
  	<div class="col-md-8 body">
        {!! Form::text('name', $task->name, ['placeholder' => 'Task Name', 'class' => 'form-control form-control-sm', 'autocomplete' => 'off']) !!}
        <br/>
        <label><span class="icon wb-list" aria-hidden="true"></span> Checklist</label>
        <br/>
        @include('app.tasks._checklist')
    </div>

    <div class="col-md-4 sidebar">
        @include('app.tasks._duedate')
        @include('app.tasks._tags')
        @include('app.tasks._about')
    </div>
</div>