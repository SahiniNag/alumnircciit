<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{
    protected $fillable = [
    	'position', 'employer', 'job_description',
    	'skills_required', 'job_type', 'city',
    	'state', 'country', 'deadline'
    ];
}
