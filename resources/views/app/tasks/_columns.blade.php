<div class="row">
	<div class="col-md-4 tasks-column ">
		<div class="header bg-red-400">
			<span class="icon wb-signal" aria-hidden="true"></span> Open
		</div>
		<div class="tasks-body bg-grey-100">
			<div class="tasks-list">

			</div>

			<div class="task-input">
				{!! Form::Open(['route' => ['tasks.store', $project->id], 'class' => 'form-horizontal']) !!}
					{!! Form::text('name', null, ['class' => 'form-control form-control task-name']) !!}
					{!! Form::hidden('type_id', 1) !!}
				{!! Form::close() !!}
			</div>

			<center>
				<button type="button" class="btn btn-icon btn-default btn-outline btn-round add-task">
					<i class="icon wb-plus" aria-hidden="true"></i>
				</button>
			</center>
		</div>
	</div>

	{{-- <div class="col-md-4 tasks-column">
		<div class="header bg-indigo-400">
			<span class="icon wb-graph-up" aria-hidden="true"></span> In progress
		</div>
	</div>
	<div class="col-md-4 tasks-column">
		<div class="header bg-green-400">
			<span class="icon wb-check-circle" aria-hidden="true"></span> Completed
		</div>
	</div> --}}
</div>