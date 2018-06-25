<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	//'user_id' => 100000001,
        	'name' => str_random(10),
        	'email' => str_random(10).'@gmail.com',
        	'password' => Hash::make('password'),
        	'contact' => str_random(10),
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now()
        ]);
    }
}
