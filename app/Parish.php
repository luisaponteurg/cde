<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parish extends Model
{
    protected $fillable = [
    	'name', 'municipality_id', 
    ];
}
