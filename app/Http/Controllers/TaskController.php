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
     * Create a project task.
     * 
     * @param Project $project 
     * @return type
     */
    public function create(Project $project)
    {
    	return view('app.tasks.create', ['project' => $project, 'types' => $this->types, 'tags' => $project->tags]);
    }
}
