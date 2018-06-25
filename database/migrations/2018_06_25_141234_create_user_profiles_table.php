<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->increments('userprofile_id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('contact')->unique();
            $table->string('year_of_passing', 10);
            $table->string('department', 10);
            $table->string('degree_name', 10);
            $table->string('alumni_id', 25)->unique();
            $table->string('current_job_profile', 25);
            $table->string('current_employer', 30);
            $table->string('current_city', 20);
            $table->string('current_state', 30);
            $table->string('current_country', 20);
            $table->text('bio');
            $table->integer('registration_type');
            $table->timestamps();
        });

        Schema::table('user_profiles', function (Blueprint $table) {
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
        Schema::dropIfExists('user_profiles');
    }
}
