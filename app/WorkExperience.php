<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    protected $fillable = [
    	'position', 'employer', 'description',
    	'start_date', 'end_date', 'job_type',
    	'city', 'state', 'country'
    ];
}
