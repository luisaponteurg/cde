<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Period_detail extends Model
{
    protected $fillable = [
    	'lapse', 'period', 'career_headquarter_id',
    ];
}
