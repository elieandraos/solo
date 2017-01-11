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


}
