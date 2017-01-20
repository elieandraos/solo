<?php

namespace App\Http\Controllers;

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
        dd($request->all());
        return;
    }

    /**
     * Create a project task.
     * 
     * @param Project $project 
     * @return type
     */
    public function edit(Project $project)
    {
    	return view('app.tasks.create', ['project' => $project, 'types' => $this->types, 'tags' => $project->tags]);
    }
}
