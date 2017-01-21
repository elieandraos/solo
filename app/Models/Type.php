<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $table = "types";
    protected $fillable = [ "name", 'color', 'icon' ]; 
    public $timestamps = false;

}
