<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_profile extends Model
{
    protected $fillable = [
    	'person_id', 'career_id', 'user_id', 
    ];
}
