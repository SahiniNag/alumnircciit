<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class WorkExperiencesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('work_experiences')->insert([
        	'exp_id' => 100000001,
        	'position' => str_random(15),
        	'employer' => str_random(20),
        	'description' =>str_random(100)."\n".str_random(100)."\n",
        	'start_date' => date('Y-m-d'),
        	'job_type' => 'Freelancing',
        	'city' => str_random(10),
        	'state' => str_random(20),
        	'country' => str_random(15),
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now()
        ]);
    }
}
