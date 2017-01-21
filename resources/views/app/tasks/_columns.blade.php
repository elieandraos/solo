<div class="row">
	@foreach($types as $type)
		<div class="col-md-4 tasks-column ">
			<div class="header {!! $type->color !!}">
				<span class="icon {!! $type->icon !!}" aria-hidden="true"></span> {!! $type->name !!}
			</div>
			<div class="tasks-body bg-grey-100">
				<div class="tasks-list type-{!! $type->id !!}">
					@foreach($project->taskByType($type->id) as $task)
						<div id="task-{!! $task->id !!}">
							@include('app.tasks._card')
						</div>
					@endforeach
				</div>

				<div class="task-input">
					{!! Form::Open(['route' => ['tasks.store', $project->id], 'class' => 'form-horizontal']) !!}
						{!! Form::text('name', null, ['class' => 'form-control form-control task-name']) !!}
						{!! Form::hidden('type_id', $type->id) !!}
					{!! Form::close() !!}
				</div>

				<center>
					<button type="button" class="btn btn-icon btn-default btn-outline btn-round add-task">
						<i class="icon wb-plus" aria-hidden="true"></i>
					</button>
				</center>
			</div>
		</div>
	@endforeach
</div>