<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_experiences', function (Blueprint $table) {
            $table->increments('exp_id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('position', 20);
            $table->string('employer', 20);
            $table->text('description');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('job_type', 20);
            $table->string('city', 20);
            $table->string('state', 30);
            $table->string('country', 20);
            $table->timestamps();
        });

        Schema::table('work_experiences', function (Blueprint $table) {
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
        Schema::dropIfExists('work_experiences');
    }
}
