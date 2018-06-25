<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->increments('ed_id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('degree_name', 20);
            $table->string('institute');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('city', 20);
            $table->string('state', 30);
            $table->string('country', 20);
            $table->timestamps();
        });

        Schema::table('education', function (Blueprint $table) {
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('set NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('education');
    }
}
