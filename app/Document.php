<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
    	'code', 'current_date', 'person_id', 'document_type', 'personal_id',
    ];
}
