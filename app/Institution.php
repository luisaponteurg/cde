<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    protected $fillable = [
    	'cod_opsu','name','description'
    ];
}
