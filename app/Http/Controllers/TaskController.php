<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\Type;
use App\Http\Requests;
use App\Models\Project;
use Illuminate\Http\Request;

class TaskController extends Controller
{
	public function __construct()
	{
		$this->types = Type::all();
	}

	/**
	 * List project tasks.
	 * 
	 * @return type
	 */
    public function index(Project $project)
    {
    	return view('app.tasks.index', ['project' => $project, 'types' => $this->types]);
    }

    /**
     * Store a task in the database.
     * 
     * @param Request $request 
     * @param Project $project 
     * @return type
     */
    public function store(Request $request, Project $project)
    {
        $task = $project->tasks()->create([
            'name'          => $request->get('name'),
            'type_id'       => $request->get('type_id'),
            'start_date'    => date('Y-m-d'),
        ]);
        return response()->json(['id' => $task->id, 'type' => $task->type->id, 'project' => $project->id ]);
    }

    /**
     * Create a project task.
     * 
     * @param Project $project 
     * @return type
     */
    public function edit(Project $project, Task $task)
    {
    	return view('app.tasks.edit', ['project' => $project, 'task' =>  $task, 'types' => $this->types, 'tags' => $project->tags]);
    }

    /**
     * Displays the task card.
     * 
     * @param Project $project 
     * @param Task $task 
     * @return type
     */
    public function display(Project $project, Task $task)
    {
        return view('app.tasks._card', ['project' => $project, 'task' => $task]);
    }
}
