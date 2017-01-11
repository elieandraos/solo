<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Http\Requests;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Zilla\Repositories\ProjectRepository;

class ProjectController extends Controller
{
	protected $tag_colors;

	public function __construct()
	{
		$this->tag_colors = config('services.colors');
        $this->projectRepos = new ProjectRepository;
	}

    /**
     * Create project.
     * 
     * @return type
     */
    public function create()
    {
    	return view('app.projects.create', ['tag_colors' => $this->tag_colors]);
    }

    /**
     * Store project in database.
     * 
     * @param Request $request 
     * @return type
     */
    public function store(Request $request)
    {
        $this->projectRepos->create($request->all());
        return redirect( route('dashboard') );
    }

    /**
     * Edit project.
     * 
     * @param Project $project 
     * @return type
     */
    public function edit(Project $project)
    {
        return view('app.projects.edit', ['tag_colors' => $this->tag_colors, 'project' => $project]);
    }

    /**
     * Update the project details in database.
     * 
     * @param Request $request 
     * @param Project $project 
     * @return type
     */
    public function update(Request $request, Project $project)
    {
        $this->projectRepos->update($request->all(), $project);
        return redirect( route('dashboard') );
    }
}
