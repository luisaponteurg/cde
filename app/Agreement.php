<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agreement extends Model
{
    protected $fillable = [
    	'id_career', 'institution_name', 'national', 'name',
    ];
}
