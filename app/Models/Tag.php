<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "tags";
    protected $fillable = [ "name", "color"];

    /**
     * Project relation.
     * 
     * @return type
     */
    public function project()
    {
    	return $this->belongsTo('App\Models\Project');
    }
}
