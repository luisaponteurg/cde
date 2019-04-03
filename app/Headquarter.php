<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Headquarter extends Model
{
    protected $fillable = [
    	'institution_id','type_headquarter_id','location_id','phone',
    ];
}
