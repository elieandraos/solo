<?php 

namespace App\Zilla\Repositories;

use Carbon\Carbon;
use App\Models\Tag;
use App\Models\Project;

class ProjectRepository
{
	/**
	 * Create project.
	 * 
	 * @param type $input 
	 * @return type
	 */
	public function create($input)
	{
		if(isset($input['start_date']))
			$input['start_date'] = Carbon::parse($input['start_date'])->format('Y-m-d');
		
		if(isset($input['due_date']))
        	$input['due_date'] = Carbon::parse($input['due_date'])->format('Y-m-d');

        $project = Project::create($input);
        self::syncTags($project, $input);
	}

	/**
	 * Update project.
	 * 
	 * @param type $input 
	 * @param type $project 
	 * @return type
	 */
	public function update($input, $project)
	{
		if(!$project)
			return;

		$input = self::validateInput($input);
        $project->update($input);
        self::syncTags($project, $input);
	}

	/**
	 * Sync the project tags.
	 * 
	 * @param type $project 
	 * @param type $input 
	 * @return type
	 */
	public function syncTags($project, $input)
	{
		$tags = [];
		foreach($input['tag_name'] as $key => $tag_name)
			array_push($tags, new Tag(['name' => $tag_name, 'color' => $input['tag_color'][$key]]));

		$project->tags()->delete();
		$project->tags()->saveMany($tags);
	}

	/**
	 * Transforms the date inputs passed to mysql format.
	 * 
	 * @param type $input 
	 * @return type
	 */
	public function validateInput($input)
	{
		if(isset($input['start_date']))
			$input['start_date'] = Carbon::parse($input['start_date'])->format('Y-m-d');
		
		if(isset($input['due_date']))
        	$input['due_date'] = Carbon::parse($input['due_date'])->format('Y-m-d');

        return $input;
	}
}

?>