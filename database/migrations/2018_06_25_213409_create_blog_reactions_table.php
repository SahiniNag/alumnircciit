<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogReactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_reactions', function (Blueprint $table) {
            $table->increments('reaction_id');
            $table->integer('user_id')->unsigned()->nullable();
            $table->integer('blog_id')->unsigned()->nullable();
            $table->boolean('like');
            $table->text('comment');
            $table->timestamps();
        });

        Schema::table('blog_reactions', function (Blueprint $table) {
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('set NULL');
            $table->foreign('blog_id')->references('blog_id')->on('blogs')->onDelete('set NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_reactions');
    }
}
