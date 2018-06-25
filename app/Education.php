<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = [
    	'degree_name', 'institute', 'start_date',
    	'end_date', 'city', 'state', 'country'
    ];
}
