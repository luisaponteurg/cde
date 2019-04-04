<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lapse extends Model
{
    protected $fillable = ['type_lapse_id', 'completion_date', 'start_date'];
}
