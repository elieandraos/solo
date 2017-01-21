<a  class="task-card" href="javascript:void(0)" 
	data-modal="remote" data-modal-url="{!! route('tasks.edit', [$project->id, $task->id]) !!}" 
    data-modal-title="Task Details" data-modal-callback="initCreateModal"
>
	<strong>{!! $task->name !!}</strong>
</a>
