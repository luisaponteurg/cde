<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    protected $fillable = [
    	'dependence_id', 'person_id', 
    ];
}
