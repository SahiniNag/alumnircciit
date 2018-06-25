<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class EducationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('education')->insert([
        	'ed_id' => 100000001,
        	'degree_name' => str_random(15),
        	'institute' => str_random(35),
        	'start_date' => date('Y-m-d'),
        	'city' => str_random(10),
        	'state' => str_random(20),
        	'country' => str_random(15),
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now()
        ]);
    }
}
