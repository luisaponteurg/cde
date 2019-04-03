<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
    	'address', 'email', 'brithdate', 'genere', 'identity', 'first_name', 'first_s_name', 'last_name', 'last_s_name', 'phone', 'doc_type', 'ethnic_id', 'parish_id',
    ];
}
