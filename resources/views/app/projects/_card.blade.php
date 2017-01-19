<div class="col-md-4 col-xs-12 project-card">

	<strong> {!! $project->name !!}
	<p class="time-tracker">{!! $project->time_remaining !!} day(s) remaining</p>

	<div class="action-list">
		<a href="{!! route('projects.edit', $project->id) !!}">
			<button type="button" class="btn btn-icon btn-dark btn-outline" data-toggle="tooltip" data-original-title="Edit">
				<i class="icon wb-pencil" aria-hidden="true"></i>
			</button>
		</a>

		<a href="{!! route('tasks.index', $project->id) !!}">
			<button type="button" class="btn btn-icon btn-dark btn-outline" data-toggle="tooltip" data-original-title="Tasks">
				<i class="icon wb-check" aria-hidden="true"></i>
			</button>
		</a>

		<button type="button" class="btn btn-icon btn-dark btn-outline" data-toggle="tooltip" data-original-title="Files">
			<i class="icon wb-paperclip" aria-hidden="true"></i>
		</button>

		<button type="button" class="btn btn-icon btn-dark btn-outline" data-toggle="tooltip" data-original-title="Calendar">
			<i class="icon wb-calendar" aria-hidden="true"></i>
		</button>
	</div>

	<div class="card-watermark darker font-size-60 m-15"><i class="icon wb-clipboard" aria-hidden="true"></i></div>

</div>
