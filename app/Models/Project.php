<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = "projects";
    protected $fillable = [ "name", "start_date" , "due_date", "amount" ]; 

    /**
     * Tags relation.
     * 
     * @return type
     */
    public function tags()
    {
        return $this->hasMany('App\Models\Tag');
    }

    /**
     * Tasks relation.
     * 
     * @return type
     */
    public function tasks()
    {
        return $this->hasMany('App\Models\Task');
    }

    /**
     * Start date accessor: change the format when displayed.
     * 
     * @param type $date 
     * @return type
     */
    public function getStartDateAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d', $date)->format('D, d M Y');
    }

     /**
     * Due date accessor: change the format when displayed.
     * 
     * @param type $date 
     * @return type
     */
    public function getDueDateAttribute($date)
    {
        return Carbon::createFromFormat('Y-m-d', $date)->format('D, d M Y');
    }

    /**
     * Remaning time (in days) to end the project.
     * 
     * @return type
     */
    public function getTimeRemainingAttribute()
    {
        $end = Carbon::parse($this->due_date);
        $now = Carbon::now();
        return $end->diffInDays($now);
    }

    /**
     * Get the project tasks by type.
     * 
     * @param type $type 
     * @return type
     */
    public function taskByType($type)
    {
        if(!$type)
            return null;

        return $this->tasks()->where('type_id', '=', $type)->get();
    }


}
