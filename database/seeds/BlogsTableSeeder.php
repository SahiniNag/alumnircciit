<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
        	'blog_id' => 100000001,
        	'title' => str_random(20),
        	'post' =>str_random(1000),
        	'created_at' => Carbon::now(),
        	'updated_at' => Carbon::now()
        ]);
    }
}
