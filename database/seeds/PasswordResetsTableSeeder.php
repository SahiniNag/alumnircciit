<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PasswordResetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('password_resets')->insert([
        	//'password_reset_id' => 100000001,
        	'OTP' => str_random(6),
        	'created_at' => Carbon::now()
        ]);
    }
}
