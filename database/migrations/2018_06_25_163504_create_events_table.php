<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('event_id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('event_name', 40);
            $table->text('event_description');
            $table->date('event_date');
            $table->time('event_time');
            $table->string('city', 20);
            $table->string('state', 30);
            $table->string('country', 20);
            $table->timestamps();
        });

        Schema::table('events', function (Blueprint $table) {
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
        Schema::dropIfExists('events');
    }
}
