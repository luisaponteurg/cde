<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pre_inscription extends Model
{
    protected $fillable = [
    	'bank_id', 'student_id',
    ];
}
