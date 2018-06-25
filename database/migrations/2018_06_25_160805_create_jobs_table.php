<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('job_id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('position', 40);
            $table->string('employer', 40);
            $table->text('job_description');
            $table->text('skills_required');
            $table->string('job_type', 20);
            $table->string('city', 20);
            $table->string('state', 30);
            $table->string('country', 20);
            $table->date('deadline');
            $table->timestamps();
        });

        Schema::table('jobs', function (Blueprint $table) {
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
        Schema::dropIfExists('jobs');
    }
}
