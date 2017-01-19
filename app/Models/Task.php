<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = "tasks";
    protected $fillable = [ "name", "start_date", "due_date", "type_id", "project_id" ]; 
    public $timestamps = false;

    /**
     * Project relation.
     * 
     * @return type
     */
    public function project()
    {
    	return $this->belongsTo('App\Models\Project');
    }

    /**
     * Checklist relation.
     * 
     * @return type
     */
    public function checklists()
    {
        return $this->hasMany('App\Models\Checklist');
    }

    /**
     * Tag relation.
     * 
     * @return type
     */
    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag', 'tag_task');
    }

}
