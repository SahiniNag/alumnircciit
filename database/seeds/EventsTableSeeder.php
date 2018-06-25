<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
        	'event_id' => 100000001,
        	'event_name' => str_random(20),
        	'event_description' =>str_random(100)."\n".str_random(100)."\n",
        	'event_date' => date('Y-m-d'),
        	'event_time' => Carbon::now()->toTimeString(),
        	'city' => str_random(10),
        	'state' => str_random(20),
        	'country' => str_random(15),
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now()
        ]);
    }
}
