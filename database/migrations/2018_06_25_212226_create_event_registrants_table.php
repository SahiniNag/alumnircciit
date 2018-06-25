<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventRegistrantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_registrants', function (Blueprint $table) {
            $table->increments('registration_id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('event_id')->unsigned()->nullable();
            $table->timestamps();
        });

        Schema::table('event_registrants', function (Blueprint $table) {
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('set NULL');
            $table->foreign('event_id')->references('event_id')->on('events')->onDelete('set NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('event_registrants');
    }
}
