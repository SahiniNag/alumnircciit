<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class PaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payments')->insert([
        	'payment_id' => 100000001,
        	'transaction_id' => 9281732,
        	'payment_status' => 100,
        	'amount' => 1438,
        	'particulars' => str_random(20),
        	'description' => str_random(15),
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now()
        ]);
    }
}
