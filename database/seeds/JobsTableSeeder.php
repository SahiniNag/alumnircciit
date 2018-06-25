<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class JobsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->insert([
        	//'job_id' => 100000001,
        	'position' => str_random(20),
        	'employer' => str_random(20),
        	'job_description' =>str_random(100)."\n".str_random(100)."\n",
        	'skills_required' =>str_random(1000),
        	'job_type' => 'Full-time',
        	'city' => str_random(10),
        	'state' => str_random(20),
        	'country' => str_random(15),
        	'deadline' => date('Y-m-d'),
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now()
        ]);
    }
}
