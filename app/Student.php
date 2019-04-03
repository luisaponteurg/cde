<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
    	'residency', 'cni', 'person_id', 'deposit_id', 'modality_id' 
    ];
}
