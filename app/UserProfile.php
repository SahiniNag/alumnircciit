<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userprofiles extends Model
{
    protected $fillable = [
    	'name', 'email', 'contact','alumni_id', 'year_of_passing', 'department', 
    	'degree_name', 'current_job_profile', 'current_employer', 'current_city',
    	'current_state', 'current_country', 'bio'
    ];
}
