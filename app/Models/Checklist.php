<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{
    protected $table = "checklists";
    protected $fillable = [ "name", "status" ]; 
    public $timestamps = false;

    /**
     * Task relation.
     * 
     * @return type
     */
    public function task()
    {
    	return $this->belongsTo('App\Models\Task');
    }
}
