<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document_type extends Model
{
    protected $fillable = [
    	'id', 'code', 'limit', 'mount', 'name', 'type',
    ];
}
