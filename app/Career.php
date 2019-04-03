<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $fillable = [
    	'name','code_internal','area_id','modality_id',
    ];
}
