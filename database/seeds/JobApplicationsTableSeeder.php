<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class JobApplicationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('job_applications')->insert([
        	'application_id' => 100000001,
        	'application_status' => 200,
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now()
        ]);
    }
}
